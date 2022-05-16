<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    public function role(){
        $role = Role::where('id','<>',0)->get();
        return view('page.role',compact('role'));
    }

    public function searchRole(Request $req)
    {
        $role = Role::where('name','like','%'.$req->search.'%')->get();
        return view('page.role',compact('role'));
    }

    public function addRole(){
        return view('page.addRole');
    }

    public function postAddRole(Request $req){
        $role = new Role();
        $role->name = $req->name;
        $role->number = 6;
        $role->description = $req->description;
       
      
        // dd($product);
        $role->save();

        return redirect()->route('role')->with('mes','Phân quyền thành công');
    }

    public function getEditRole($id)
    {
        $role = Role::where('id',$id)->first();
        return view('page.editRole',compact('role'));
    }

    public function postEditRole($id, Request $req){
        $role = Role::where('id',$id)->first();

        $role->name = $req->name;
        $role->description = $req->description;
        
        $role->save();
        return redirect()->route('role')->with("mes","Sửa thông tin quyền thành công");
    }
}
