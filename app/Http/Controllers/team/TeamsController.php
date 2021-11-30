<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    //
    public function index()
    {
       return view('team/index');
    }
    public function john()
    {
        return view('team.john');
    }
    public function daizy()
    {
        return view('team.daizy');
        
    }
    public function nahashion()
    {
        return view('team.nahasion');
    }
    public function daisy()
    {
        return view('team.daizy');
    }
    public function kamande()
    {
        return view('team.kamade');
        
    }
    public function goodwill()
    {
        return view('team.goodwill');
        
    }
}
