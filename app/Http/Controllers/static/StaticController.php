<?php

namespace App\Http\Controllers\static;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function Rehab()
    {
        return view('static.rehab');
    }
    public function Economic()
    {
        return view('static.economic');
    }
    public function Education()
    {
        return view('static.education');
    }
    public function Justice()
    {
        return view('static.justice');
    }
    public function Climate()
    {
        return view('static.climate');
    }
    public function About()
    {
        return view('static.about');
    }
    public function contact()
    {
        return view('static.contact');
    }
    public function Partner()
    {
        return view('static.partner');
    }
    public function Volunteer()
    {
        return view('static.volunteer');
    }
}
