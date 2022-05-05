<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

class NumberController extends Controller
{
    //
    public function number()
    {
        $number = Number::where('id','<>',0)->get();
        return view('page.number',compact('number'));
    }

    public function getAddNumber(){

        return view('page.addNumber');
    }

    public function getdetailsNumber(){

        return view('page.numberDetails');
    }
}
