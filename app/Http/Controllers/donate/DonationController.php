<?php

namespace App\Http\Controllers\donate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    //

    public function index()
    {
        return view('donate.index');
    }
    public function show()
    {
        return view('donation.show');
    }
}
