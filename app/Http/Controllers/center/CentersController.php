<?php

namespace App\Http\Controllers\center;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CentersController extends Controller
{
    //
    public function Workingchildren()
    {
        return view('center.Working');

    }
    public function Schoolfeeding()
    {
      return view('center.school');
    }
    public function Temporaryrescue()
    {
      return view('center.rescue');
    }
    
}
