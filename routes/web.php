<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WarrantyController;
use App\Http\Controllers\HomeController;
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


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/product-list/{id?}', 'productList')->name('product-list');
    Route::get('/single-product', 'singleProduct')->name('single-product');
    Route::get('/support', 'support')->name('support');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/products', 'products')->name('products');
    Route::get('/products/consumer', 'consumer')->name('consumer');
    Route::get('/products/professional', 'professional')->name('professional');
});

Route::controller(ProductController::class)->prefix('product')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('my-product.index');
    Route::post('/add', 'store')->name('product.add');
    Route::get('/edit/{id}','edit')->name('product.edit');
    Route::delete('delete/{id}', 'delete')->name('product.delete');
    Route::get('get-all-product-type', 'getAllProductType')->name('product.delete');
});

Route::controller(WarrantyController::class)->prefix('/warranty')->middleware('auth')->group(function () {
    Route::get('/', 'getAllWarranties')->name('warranty.index');
    Route::post('/add', 'store')->name('warranty.store');
    Route::get('/edit/{id}','edit')->name('warranty.edit');
    Route::delete('delete/{id}', 'delete')->name('warranty.delete');
});
Route::controller(App\Http\Controllers\AuthController::class)->prefix('admin')->group( function () {
    Route::get('/login', 'loginForm')->name('login');
    Route::post('/login', 'login')->name('auth.login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register','register')->name('register');
    Route::get('/logout', 'logout')->name('auth.logout');
    Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::post('/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::get('/reset-password/{token}', 'resetPassword')->name('reset-password');
    Route::post('/reset-password', 'resetPassword')->name('reset-password');

});

Route::get('admin/dashboard', function (){
    return view('dashboard');
})->name('admin.dashboard')->middleware('auth');


Route::controller(\App\Http\Controllers\ContactUsController::class)->prefix('contact-us')->group(function (){
    Route::post('/add', 'store')->name('contact-us.add');
});