<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploadManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\WarrantyRequest;
use App\Models\Product;
use App\Models\Warranty;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WarrantyController extends Controller
{
    public function getAllWarranties()
    {
        $warranties =  Warranty::with('productType')->get();
        return view('warranty.index', compact('warranties'));

    }
//    public function store(WarrantyRequest $request)
//    {
//        // Create the warranty record
//        $data = $request->all();
//
//        // Generate QR code data
//        $qrData = json_encode($request->all());
//
//        // Create the QR code
//        $qrCode = QrCode::format('png')->size(300)->generate($qrData);
//
//        // Define the path and filename for the QR code
//
//
//        // Store the QR code in the storage folder
//        if ($request->hasFile('image_url')) {
//            $brochure = FileUploadManager::uploadFile($request->file('image_url'), 'public/images/products/');
//            $data['image_url'] = $brochure['doc_name'];
//        }
//        return Warranty::updateOrCreate(['id' => $data['id']],$data);
//
//        // Update the warranty record with the QR code path
//        $warranty->update(['image_url' => $fileName]);
//
//        // Return a response or redirect as needed
//        return redirect()->route('warranty.index')->with('success', 'Warranty created successfully with QR code.');
//    }


    public function store(WarrantyRequest $request)
    {
        // Gather all request data
        $data = $request->all();

        // Generate QR code data
        $qrData = json_encode($request->all());

        // Create the QR code and save it as an image
        $qrCode = QrCode::format('png')->size(300)->generate($qrData);
        $qrFileName = 'warranty_' . uniqid() . '.png';
        $qrFilePath = storage_path('app/public/images/warranty/' . $qrFileName);

        // Ensure the directory exists
        if (!Storage::exists('public/images/warranty')) {
            Storage::makeDirectory('public/images/warranty');
        }

        // Store the QR code image in the filesystem
        file_put_contents($qrFilePath, $qrCode);

        // Create an UploadedFile instance from the temporary file
        $uploadedFile = new UploadedFile(
            $qrFilePath,
            $qrFileName,
            'image/png',
            null,
            true
        );

        // Use the FileUploadManager to handle the uploaded file
        $brochure = FileUploadManager::uploadFile($uploadedFile, 'public/images/warranty/');
        $data['image_url'] = $brochure['doc_name'];

        // Create or update the warranty record
        $warranty = Warranty::updateOrCreate(['id' => $data['id']], $data);

        // Clean up the temporary file
        unlink($qrFilePath);

        // Return a response or redirect as needed
        return redirect()->route('warranty.index')->with('success', 'Warranty created successfully with QR code.');
    }    public function edit(Request $request, $id)
    {
        return Warranty::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        return Warranty::update($data);
    }
}
