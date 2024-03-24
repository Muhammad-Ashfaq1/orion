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


Route::get('/', function () {
    return view('Home');
})->name('home');
//
//
//
//
//Route::get('/about-us', function (){
//    return view('partials.about-us');
//})->name('about-us');
//
//Route::get('/product-list', function (){
//    return view('partials.product-list');
//})->name('product-list');
//Route::get('/single-product', function (){
//    return view('partials.single-product');
//})->name('single-product');
//Route::get('/support', function (){
//    return view('partials.support');
//})->name('support');
//
//Route::get('/contact-us', function (){
//    return view('partials.contact-us');
//})->name('contact-us');
//
//Route::get('/login', function (){
//    return view('partials.login');
//})->name('login');
//
//
//Route::get('/project', function (){
//    return view('partials.projects');
//})->name('project');



Route::controller(\App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/product-list', 'productList')->name('product-list');
    Route::get('/single-product', 'singleProduct')->name('single-product');
    Route::get('/support', 'support')->name('support');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/login', 'login')->name('login');
    Route::get('/projects', 'projects')->name('projects');
});


Route::get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

