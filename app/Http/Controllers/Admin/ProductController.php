<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploadManager;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller{
    public function index()
    {
        $products = Product::with('productType')->orderByDesc('created_at')->get();
        return view('product.index', compact('products'));
    }

    public function listing()
    {
        $products = Product::orderByDesc('created_at')->get();
        return view('product.data-table', compact('products'))->render();
    }

    public function getAllProductType()
    {
        return ProductType::orderBy('type_name')->get();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image_url')) {
            $brochure = FileUploadManager::uploadFile($request->file('image_url'), 'public/images/products/');
            $data['image_url'] = $brochure['doc_name'];
        }
        return Product::updateOrCreate(['id' => $data['id']],$data);
    }

    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }
    public function delete($id)
    {
        $product =  Product::findOrFail($id);
        if($product){
            $product->delete();
            $products = Product::with('productType')->orderByDesc('created_at')->get();
            return view('product.data-table', compact('products'))->render();
        }
    }



    public function productList(Request $request , $id=null)
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
        return view('partials.products-list', compact('products'));
    }

   
    public function professional()
    {
        $products = ProductType::where('product_category_id',ProductType::PROFESSIONAL_TYPE)->get();
        return view('partials.products-professional', compact('products'));
    }
}
