<?php

namespace App\Http\Controllers\young;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    //
    public function index()
    {
        return view('friend.index');
    }
    public function Brillian()
    {
        return view('friend.brillian');
    }
    public function Wafula()
    {
        return view('friend.wafula');
    }
    public function Miriam()
    {
        return view('friend.wacuka');
    }
    public function Prudence()
    {
        return view('friend.prudence');
    }
    public function Cynthia()
    {
        return view('friend.cynthia');
    }
    public function Caroline()
    {
        return view('friend.caroline');
    }
    //recent 2021
    public function Diana()
    {
        return view('friend.diana');
    }
    public function Priscila()
    {
        return view('friend.priscila');
    }
    public function Eric()
    {
        return view('friend.eric');
    }
    public function Andrew()
    {
        return view('friend.andrew');
    }
    public function Sandra()
    {
      return 'Sandra proffesion is Mass Communication & Journerlism';
    }
    public function Lilian()
    {
        return view('friend.lilian');
    }
}
