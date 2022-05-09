<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function report()
    {
        // $number = Number::where('id','<>',0)->get();

        return view('page.report');
    }
}
