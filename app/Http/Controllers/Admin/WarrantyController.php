<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploadManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\WarrantyRequest;
use App\Models\ProductType;
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
    public function store(WarrantyRequest $request)
    {
        $request_data = $request->all();
        // Gather all request data
        $data = [];
        $product = ProductType::findOrFail($request->product_type_id);
        $data['Product_Name'] = $product->type_name ;
        $data['Warranty_Start'] = $request->start_date;
        $data['Valid_Upto'] = $request->end_date;
        // Generate QR code data
        $qrData = json_encode($data);

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
        $request_data['image_url'] = $brochure['doc_name'];

        // Create or update the warranty record
        $warranty = Warranty::updateOrCreate(['id' => $request_data['id']], $request_data);

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

    public function delete(Request $request, $id)
    {
        $warranty =  Warranty::findOrFail($id);
        if($warranty){
            $warranty->delete();
            $warranties = Warranty::with('productType')->orderByDesc('created_at')->get();
            return view('warranty.data-table', compact('warranties'))->render();
        }
    }
}
