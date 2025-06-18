<?php

use App\Livewire\About;
use App\Livewire\WooProductList;
use App\Livewire\WooProductDetail;
use App\Livewire\WooProductListHome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\merkController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\adminPageController;

Route::get('/', WooProductList::class)->name('search');
Route::get('/home', WooProductListHome::class)->name('home');
Route::get('/product-detail/{slug}', WooProductDetail::class)->name('product.detail');
Route::get('/about', About::class)->name('about');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/download-image', function (\Illuminate\Http\Request $request) {
    $url = $request->query('url');
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        abort(404);
    }

    $imageContents = @file_get_contents($url);
    if (!$imageContents) {
        abort(404, 'Gambar tidak bisa diambil.');
    }

    $filename = basename(parse_url($url, PHP_URL_PATH));
    return response($imageContents)
        ->header('Content-Type', 'image/jpeg')
        ->header('Content-Disposition', 'attachment; filename="'.$filename.'"');
});
