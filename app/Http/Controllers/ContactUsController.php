<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $queries = ContactUs::orderByDesc('created_at')->get();
        return view('contact-us.index', compact('queries'));
    }
    public function store(Request $request)
    {
        $query = ContactUs::updateOrCreate(['id' => @$request->id],$request->all());
        if($query)
        {
            toastr()->success('Your Queries has been Received Successfully!');
            return redirect()->back();

        }
    }
}
