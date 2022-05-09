<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;
use Illuminate\Support\Facades\Auth;

class NumberController extends Controller
{
    //
    public function number()
    {
        $number = Number::where('id','<>',0)->get();

        // sort
        if(isset($_GET['sort_by']))
        {
             $sort_by = $_GET['sort_by'];
             //echo $sort_by;

             if($sort_by=='heart')
             {
                $number = Number::where('service',1)->get();
             }elseif($sort_by=='gynecological')
             {
                $number = Number::where('service',2)->get();
             }
             elseif($sort_by=='dentomaxillofacia')
             {
                $number = Number::where('service',3)->get();
             }
             elseif($sort_by=='ear')
             {
                $number = Number::where('service',4)->get();
             }
             elseif($sort_by=='noneService')
             {
                $number = Number::where('id','<>',0)->get();

             }

        }

        if(isset($_GET['sort_by_original']))
        {
             $sort_by = $_GET['sort_by_original'];
             //echo $sort_by;

             if($sort_by=='kiosk')
             {
                $number = Number::where('original','Kiosk')->get();
             }elseif($sort_by=='system')
             {
                $number = Number::where('original','System')->get();
             }
             
             elseif($sort_by=='none')
             {
                $number = Number::where('id','<>',0)->get();

             }

        }

        if(isset($_GET['sort_by_status']))
        {
             $sort_by = $_GET['sort_by_status'];
             //echo $sort_by;

             if($sort_by=='waiting')
             {
                $number = Number::where('status',1)->get();
             }elseif($sort_by=='used')
             {
                $number = Number::where('status',2)->get();
             }
             elseif($sort_by=='next')
             {
                $number = Number::where('status',3)->get();
             }
             
             elseif($sort_by=='none')
             {
                $number = Number::where('id','<>',0)->get();

             }

        }

        


        return view('page.number',compact('number'));
    }


    public function searchNumber(Request $req)
    {
        $number = Number::where('fullname','like','%'.$req->search.'%')->get();
        return view('page.number',compact('number'));
    }

    public function getAddNumber(){

        return view('page.addNumber');
    }

    public function getdetailsNumber($id){
        $number = Number::where('id',$id)->first();
        return view('page.numberDetails',compact('number'));
    }

    public function postAddNumber(Request $req){
        $number = new Number();
        $number->fullname = Auth::user()->fullname;
        $number->service = $req->typeService;
        $number->dateUsed = '2022-05-10';
        $number->status = 1;
        $number->original = 'Kiosk';
        $number->phone = Auth::user()->phone;
        $number->email = Auth::user()->email;
        // dd($product);
        $number->save();

        return redirect()->route('number')->with('mes','Cấp số thành công');
    }

    public function searchTimeNumber(Request $req)
    {
        $timeIn = $req->timeIn;
        $timeOut = $req->timeOut;
        $number = Number::where('created_at','>=', $timeIn)
        ->where('dateUsed','<=',$timeOut)
        ->get();
        return view('page.number',compact('number'));
    }
}
