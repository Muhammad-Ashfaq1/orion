<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploadManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\WarrantyRequest;
use App\Models\Product;
use App\Models\Warranty;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WarrantyController extends Controller
{
    public function getAllWarranties()
    {
        $warranties =  Warranty::with('productType')->get();
        return view('warranty.index', compact('warranties'));

    }
    public function store(WarrantyRequest $request)
    {
        // Create the warranty record
        $data = $request->all();

        // Generate QR code data
        $qrData = json_encode($request->all());

        // Create the QR code
        $qrCode = QrCode::format('png')->size(300)->generate($qrData);
//        dd($qrCode);

        // Define the path and filename for the QR code


        // Store the QR code in the storage folder
        if ($request->hasFile('image_url')) {
            $brochure = FileUploadManager::uploadFile($request->file('image_url'), 'public/images/products/');
            $data['image_url'] = $brochure['doc_name'];
        }
        return Product::updateOrCreate(['id' => $data['id']],$data);

        // Update the warranty record with the QR code path
        $warranty->update(['image_url' => $fileName]);

        // Return a response or redirect as needed
        return redirect()->route('warranty.index')->with('success', 'Warranty created successfully with QR code.');
    }
    public function edit(Request $request, $id)
    {
        return Warranty::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        return Warranty::update($data);
    }
}
