<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WarrantyRequest;
use App\Models\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function getAllWarranties()
    {
        $warranties =  Warranty::all();
        return view('warranty.index', compact('warranties'));

    }
    public function store(WarrantyRequest $request)
    {
        $warranties =  Warranty::create($request->all());
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
