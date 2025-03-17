<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Log;

Route::get('/index', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/kategorikursi', function () {
    return view('kategorikursi');
});

// Route shop //
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
// Route search //
Route::get('/search', [ShopController::class, 'search'])->name('search');

// Route add product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// end Route add product

// filter product
Route::get('/products/filter/{kategori}', [ProductController::class, 'filterByCategoryAjax'])->name('products.filter');
// end filter product