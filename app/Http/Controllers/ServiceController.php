<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    //
    public function service()
    {
        $service = Service::where('id','<>',0)->get();

        // sort
        if(isset($_GET['sort_by']))
        {
             $sort_by = $_GET['sort_by'];
             //echo $sort_by;

             if($sort_by=='action')
             {
                $service = Service::where('status',1)->get();
             }elseif($sort_by=='no-action')
             {
                $service = Service::where('status',0)->get();
             }
             elseif($sort_by=='none')
             {
                $service = Service::where('id','<>',0)->get();

             }

        }

        return view('page.service',compact('service'));
    }

    public function searchService(Request $req)
    {
        $service = Service::where('name','like','%'.$req->search.'%')->get();
        return view('page.service',compact('service'));
    }

    public function getAddService(){
        return view('page.addService');

    }

    public function postAddService(Request $req){
        $this->validate($req,
            [
                'id'=>'required|unique:service,id',
                'name'=>'required|unique:service,name',
                'description'=>'required',
                
                
                
            ],
            [
                'id.unique'=>'Mã dịch vụ đã tồn tại',
                'id.required'=>'Vui lòng nhập mã dịch vụ',
                'name.required'=>'Vui lòng nhập tên dịch vụ',
                'name.unique'=>'Tên dịch vụ đã tồn tại',
                'description.required'=>'Vui lòng nhập mô tả',
               
                
          
            ]
        );   
        $service = new Service();
        $service->id = $req->id;
        $service->name = $req->name;
        $service->description = $req->description;
        $service->status = 0;
        
        // dd($product);
        $service->save();

        return redirect()->route('service')->with('mes','Thêm dịch vụ thành công');

    }

    public function getDetailsService($id){
        $service = Service::where('id',$id)->first();
        return view('page.serviceDetails',compact('service'));

    }

    public function getEditService($id){
        $service = Service::where('id',$id)->first();
        return view('page.editService',compact('service'));
    }

    public function postEditService($id, Request $req){
        $service = Service::where('id',$id)->first();

        $service->id = $req->id;
        $service->name = $req->name;
        $service->description = $req->description;
        
        $service->save();
        return redirect()->route('service')->with("mes","Sửa thông tin dịch vụ thành công");
    }

    public function searchTime(Request $req)
    {
        $timeIn = $req->timeIn;
        $timeOut = $req->timeOut;
        $service = DB::table('service')->whereBetween('created_at', [$timeIn, $timeOut])
        ->get();
        return view('page.service',compact('service'));
    }
}
