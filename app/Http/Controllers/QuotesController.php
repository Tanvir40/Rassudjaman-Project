<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quote;


class QuotesController extends Controller
{
      public function quotes()
    {

        $quote =Quote::latest()->get();
        return view('backend.dashboard.quotes', ['quote' => $quote]);
    }



    public function store(Request $request)
    {
        $this->validate($request,[
              'quotes_bn'=>'required',
              'quotes_en'=>'required',

        ]);
        $qoute=Quote::create([

          'quotes_bn'=>$request->quotes_bn,
          'quotes_en'=>$request->quotes_en,
        ]);

        return back()->withInput();

    }

    public function deletedata($id)

    {
        $dquote=Quote::where('id',$id)->delete();
        return back()->withInput();

    }

      
            
            
      
}
