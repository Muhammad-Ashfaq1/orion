<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function aboutUs()
    {
        return view('partials.about-us');
    }

    public function productList()
    {
        return view('partials.product-list');
    }

    public function singleProduct()
    {
        return view('partials.single-product');
    }

    public function support()
    {
        return view('partials.support');
    }

    public function contactUs()
    {
        return view('partials.contact-us');
    }

    public function login()
    {
        return view('partials.login');
    }

    public function projects()
    {
        return view('partials.projects');
    }
    public function products()
    {
        return view('partials.products-group');
    }
}