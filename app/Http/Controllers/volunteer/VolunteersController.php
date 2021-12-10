<?php

namespace App\Http\Controllers\volunteer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VolunteerModel;

class VolunteersController extends Controller
{
    //
    public function show()
    {
        
        return view('admin.volunteers')->with('volunteers',VolunteerModel::orderby('created_at','DESC')->get());
    }
    public function create(Request $request){
         $this->validate($request,[
             'name'=>'required',
             'email'=>'required|email',
             'phone'=>'required',
             'body'=>'required',
         ]);

     VolunteerModel::create([
         'name'=>$request->input('name'),
         'email'=>$request->input('email'),
         'phone'=>$request->input('phone'),
         'body'=>$request->input('body'),
     ]);
     return redirect('/Volunteer')->with('message', 'request sent successfully we will be in touch');
         
    }
}
