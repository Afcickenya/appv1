<?php

namespace App\Http\Controllers\partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
class PartnersController extends Controller
{
    //
    public function create(Request $request){
       
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'country'=>'required',
            'phone'=>'required',
            'body'=>'required',
        ]);

    Partner::create([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
        'country'=>$request->input('country'),
        'body'=>$request->input('body'),
    ]);
    return redirect('/Partner-with-us')->with('message', 'request  sent successfully we will be in touch');
        
   }
}
