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
    return view('welcome');
})->name('home');
Route::get('/about', function (){
    return view('partials.about');
})->name('about');

Route::get('/product-list', function (){
    return view('partials.product-list');
})->name('product-list');
Route::get('/single-product', function (){
    return view('partials.single-product');
})->name('single-product');
Route::get('/support', function (){
    return view('partials.support');
})->name('support');

Route::get('/project', function (){
    return view('partials.project');
})->name('project');