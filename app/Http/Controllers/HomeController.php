<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('page.index');
    }

    public function device(){
        return view('page.device');
    }
    
}
