<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(\App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/product-list', 'productList')->name('product-list');
    Route::get('/single-product', 'singleProduct')->name('single-product');
    Route::get('/support', 'support')->name('support');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/login', 'login')->name('login');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/products', 'products')->name('products');
});

Route::controller(\App\Http\Controllers\Admin\ProductController::class)->prefix('/product')->group(function () {
    Route::get('/', 'index')->name('my-product.index');
    Route::post('/add', 'store')->name('product.store');
    Route::get('/edit/{id}','edit')->name('product.edit');
    Route::delete('delete/{id}', 'delete')->name('product.delete');
    Route::get('get-all-product-type', 'getAllProductType')->name('product.delete');
});


Route::controller(\App\Http\Controllers\Admin\WarrantyController::class)->prefix('/warranty')->group(function () {
    Route::get('/', 'getAllWarranties')->name('warranty.index');
    Route::post('/add', 'store')->name('warranty.store');
    Route::get('/edit/{id}','edit')->name('warranty.edit');
    Route::delete('delete/{id}', 'delete')->name('warranty.delete');
});

Route::get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');