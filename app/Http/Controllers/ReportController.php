<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    //
    public function report()
    {
         $report = Report::where('id','<>',0)->get();

        return view('page.report',compact('report'));
    }

    public function searchTimeReport(Request $req)
    {
        $timeIn = $req->timeIn;
        $timeOut = $req->timeOut;
        $report = Report::whereBetween('created_at', [$timeIn, $timeOut])
        ->get();
        return view('page.report',compact('report'));
    }

    public function printReport(){
        $report = Report::where('id','<>',0)->get();
        return view('page.printReport',compact('report'));
    }
}
