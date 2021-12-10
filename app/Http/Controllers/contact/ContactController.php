<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function show()
    {
        
        return view('admin.contact')->with('contacts',Contact::orderby('created_at','DESC')->get());
    }



    public function create(Request $request){
       
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            
            'body'=>'required',
        ]);

    Contact::create([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        
        'body'=>$request->input('body'),
    ]);
    return redirect('/Contact')->with('message', 'contact sent successfully we will be in touch');
        
   }
}
