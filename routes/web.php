<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\merkController;
use App\Http\Controllers\adminPageController;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [adminPageController::class, 'dashboard'])->name('index');
    // tambah-merk
    Route::get('/tambah-merk', function () {
        return view('admin.tambah-merk');
    })->name('tambah-merk');
    // store merk
    Route::post('/store-merk', [merkController::class, 'store'])->name('store-merk');
});
