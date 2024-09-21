<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\FileUploadManager;

use App\Models\Product;
use App\Models\Specification;

class SpecificationController extends Controller
{
    
    public function index()
    {
       
    $specification = Specification::with('productType')->orderByDesc('created_at')->get();
 
    return view('specifications.index', compact('specification'));
    }


    public function getProductModelsByType(Request $request)

{

   
    $productTypeId = $request->input('product_type_id');
  

    // Fetch product models associated with the selected product type
    $productModels = Product::where('product_type_id', $productTypeId)->get(['id', 'product_model']);
  

    return response()->json($productModels);
}

public function store(Request $request)
{
    
    $data = $request->all();

    if ($request->hasFile('image_url')) {
        $brochure = FileUploadManager::uploadFile($request->file('image_url'), 'public/images/products/');
     
        $data['image_url'] = $brochure['doc_name'];
    }
    return Specification::updateOrCreate(['id' => $data['id']],$data);
}
public function edit(Request $request, $id)
{
    $specifications = Specification::findOrFail($id);
    return $specifications;
}

// delete

public function delete($id)
{
    $product =  Specification::findOrFail($id);
    if($product){
        $product->delete();
        $products = Specification::orderByDesc('created_at')->get();
        return view('specifications.data-table', compact('products'))->render();
    }
}
public function show($id)

{
    $product = Product::findOrFail($id);
  
    $specifications = Specification::where('product_model', $product->product_model)->get();

   // $data = Specification::where()->all();
    return view('partials.specification', compact('specifications'));
}

public function detail($id)
{
   
 
    $pro = Specification::find($id);
   

    return view('partials.single-product', compact('pro'));
}

}
