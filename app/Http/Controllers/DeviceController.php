<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    public function device(){
        $device = Device::where('id','<>','KIO_00')->get();

        // sort
        if(isset($_GET['sort_by']))
        {
             $sort_by = $_GET['sort_by'];
             //echo $sort_by;

             if($sort_by=='action')
             {
                $device = Device::where('statusAction',1)->get();
             }elseif($sort_by=='no-action')
             {
                $device = Device::where('statusAction',0)->get();
             }
             elseif($sort_by=='none')
             {
                $device = Device::where('id','<>','KIO_00')->get();

             }

        }

        if(isset($_GET['sort_by_connect']))
        {
             $sort_by_connect = $_GET['sort_by_connect'];
             //echo $sort_by;

             if($sort_by_connect=='connect')
             {
                $device = Device::where('statusConnect',1)->get();
             }elseif($sort_by_connect=='no-connect')
             {
                $device = Device::where('statusConnect',0)->get();
             }
             elseif($sort_by_connect=='none')
             {
                $device = Device::where('id','<>','KIO_00')->get();

             }

        }

        return view('page.device',compact('device'));
    }

    public function searchDevice(Request $req)
    {
        $device = Device::where('name','like','%'.$req->search.'%')->get();
        return view('page.device',compact('device'));
    }

    public function getAddDevice()
    {
        return view('page.addDevice');
    }

    public function postAddDevice(Request $req){
        $this->validate($req,
            [
                'id'=>'required|unique:device,id',
                'name'=>'required|unique:device,name',
                'addressIP'=>'required',
                'service'=>'required',
                
                
            ],
            [
                'id.unique'=>'Mã thiết bị đã tồn tại',
                'id.required'=>'Vui lòng nhập mã thiết bị',
                'name.required'=>'Vui lòng nhập tên thiết bị',
                'name.unique'=>'Tên thiết bị đã tồn tại',
                'addressIP.required'=>'Vui lòng nhập địa chỉ IP thiết bị',
                'service.required'=>'Vui lòng nhập dịch vụ thiết bị sử dụng',
                
          
            ]
        );   
        $device = new Device();
        $device->id = $req->id;
        $device->name = $req->name;
        $device->addressIP = $req->addressIP;
        $device->statusAction = 0;
        $device->statusConnect = 0;
        $device->service = $req->service;
        $device->category = $req->category;
        $device->username = $req->username;
        $device->password = $req->password;
        // dd($product);
        $device->save();

        return redirect()->route('device')->with('mes','Thêm thiết bị thành công');
    }

    public function getDetailsDevice($id)
    {
        $device = Device::where('id',$id)->first();
        return view('page.deviceDetails',compact('device'));
    }

    public function getEditDevice($id)
    {
        $device = Device::where('id',$id)->first();
        return view('page.editDevice',compact('device'));
    }

    public function postEditDevice($id, Request $req)
    {
        $device = Device::find($id);

        $device->id = $req->id;
        $device->name = $req->name;
        $device->addressIP = $req->ip;
        $device->service = $req->service;
        $device->category = $req->category;
        $device->username = $req->username;
        $device->password = $req->password;
        $device->save();
        return redirect()->route('device')->with("mes","Sửa thông tin thiết bị thành công");
    }
}
