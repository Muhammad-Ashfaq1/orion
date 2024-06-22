<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
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

    public function productList(Request $request , $id = null)
    {

        if ($id) {
            // Fetch products of the specific type
            $products = Product::with('productType')->where('product_type_id',$id)->get();
        } else {
            // Fetch all products
            $products = Product::with('productType')->get();
        }

        // If the request is AJAX, return a partial view or JSON response
        if ($request->ajax()) {
            return view('partials.product-data-table', compact('products'))->render();
        }

        // Otherwise, return the full view
        return view('partials.product-list', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::with('productType')->findOrFail($id);
        return view('partials.single-product', compact('product'));
    }

    public function support()
    {
        return view('partials.support');
    }

    public function contactUs()
    {
        return view('partials.contact-us');
    }
    public function projects()
    {
        return view('partials.projects');
    }
    public function products()
    {
        return view('partials.products-group');
    }
    public function consumer()
    {
        $products = ProductType::where('product_category_id',ProductType::CONSUMER_TYPE)->get();
        return view('partials.consumer', compact('products'));
    }
    public function professional()
    {
        $products = ProductType::where('product_category_id',ProductType::PROFESSIONAL_TYPE)->get();
        return view('partials.professional', compact('products'));
    }
}