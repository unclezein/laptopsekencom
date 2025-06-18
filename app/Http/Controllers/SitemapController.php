<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WooCommerceService;

class SitemapController extends Controller
{
    public function index(WooCommerceService $woo)
    {
        $products = $woo->getProducts(['per_page' => 100]); // ambil produk pertama saja (atau looping semua page jika ingin lengkap)

        $xml = view('sitemap', ['products' => $products['data']]);

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
