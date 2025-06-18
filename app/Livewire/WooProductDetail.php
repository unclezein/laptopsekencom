<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\WooCommerceService;

class WooProductDetail extends Component
{
    public $slug;
    public $product;

    public function mount($slug)
    {
        $this->slug = $slug;

        $woo = app(WooCommerceService::class);
        $this->product = $woo->getProductBySlug($slug);

        abort_if(!$this->product, 404);
    }

    public function render()
    {
        return view('livewire.woo-product-detail', [
            'title' => $this->product['name'],
            'url' => request()->fullUrl(),
        ])->layout('product-detail', [
                    'title' => $this->product['name'] ?? '',
                    'keywords' => '',
                    'thumbnail' => $this->product['images'][0]['src'],
                    'description' => strip_tags($this->product['short_description'] ?? '')
                ]);
    }
}
