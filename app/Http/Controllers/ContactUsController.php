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
       
     

      if ($request->type === 'Quotation') {

        $query = ContactUs::updateOrCreate(['id' => @$request->id],$request->all());
        return response()->json(['message' => 'Your qutation have been received successfully!'], 200);



      }
      else

      {
          $query = ContactUs::updateOrCreate(['id' => @$request->id],$request->all());

          if($query)
          {
              return response()->json(['success' => 'Your contact have been received successfully!'], 200);

          }
          return redirect()->back();

      }




}
}
