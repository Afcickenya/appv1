<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('userdash');
       }elseif(Auth::user()->hasRole('blogwriter')){
            return view('blogwriterdash');
       }elseif(Auth::user()->hasRole('admin')){
         $users=User::get();
        return view('dashboard',[
             'users'=>$users,
        ]);
   }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
