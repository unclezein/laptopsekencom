<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WooCommerceService
{
    protected $url;
    protected $key;
    protected $secret;

    public function __construct()
    {
        $this->url = config('services.woocommerce.url');
        $this->key = config('services.woocommerce.key');
        $this->secret = config('services.woocommerce.secret');
    }

    public function getProducts($params = [])
    {
        try {
            $defaultParams = [
                'per_page' => 8,
                'page' => 1,
                'status' => 'publish',
            ];

            $params = array_merge($defaultParams, $params);
            $cacheKey = 'products_' . md5(json_encode($params));

            return Cache::remember($cacheKey, now()->addMinutes(5), function () use ($params) {
                $response = Http::withBasicAuth($this->key, $this->secret)
                    ->get($this->url . '/wp-json/wc/v3/products', $params);

                if ($response->successful()) {
                    return [
                        'data' => $response->json(),
                        'total' => (int) $response->header('X-WP-Total'),
                    ];
                }

                return ['data' => [], 'total' => 0];
            });
        } catch (\Exception $e) {
            Log::error('Error fetching products: ' . $e->getMessage());
            return ['data' => [], 'total' => 0];
        }
    }

    public function getProductBySlug($slug)
    {
        $cacheKey = 'product_slug_' . $slug;

        return Cache::remember($cacheKey, now()->addMinutes(10), function () use ($slug) {
            $response = Http::withBasicAuth($this->key, $this->secret)
                ->get($this->url . '/wp-json/wc/v3/products', ['slug' => $slug]);

            if ($response->successful()) {
                $products = $response->json();
                return $products[0] ?? null;
            }

            return null;
        });
    }

    public function getCategories()
    {
        return Cache::remember('product_categories', now()->addHours(12), function () {
            $response = Http::withBasicAuth($this->key, $this->secret)
                ->get($this->url . '/wp-json/wc/v3/products/categories');

            return $response->successful() ? $response->json() : [];
        });
    }
}
