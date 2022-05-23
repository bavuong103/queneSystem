<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function login()
    {
        return view('page.login');
    }

    public function postLogin(Request $req)
    {
        // $this->validate($req,
        //     [
        //         'username'=>'required',
        //         'password'=>'required|min:6|max:20'
        //     ],
        //     [
        //         'username.required'=>'Vui lòng nhập UserName',
        //         'password.required'=>'Vui lòng nhập mật khẩu',
        //         'password.min'=>'Mật khẩu ít nhất 6 ký tự'
        //     ]
        // );

        $results = array('username'=>$req->username,'password'=>$req->password);
        if(Auth::attempt($results))
        {
            //return view('page.personalAccount');
             return redirect()->route('personnalAccount');
        }
        else{
            return redirect()->back()->with('error-login','Sai tài khoản hoặc tên đăng nhập');
        }
        
    }

    public function getChangePassword()
    {
        return view('page.changePassword');
    }

    public function postCheckEmail(Request $req)
    {
        $checkEmail = User::where('email',$req->email)->first();
        if($checkEmail){
            return view('page.confirmPassword')->with('checkEmail', $checkEmail);
        }else{
            return redirect()->route('changepassword')->with('error-changepassword','Sai email');
        }
       
    }

    public function getConfirmPassword()
    {
        
        return view('page.confirmPassword');
    }

    public function postConfirmPassword(Request $req)
    {
        $user = User::where('email',$req->email)->first();
        $user->password = Hash::make($req->newPass);
        $user->save();
        return view('page.confirmPassword')->with('checkEmail', $user)->with('mes','Cập nhật thành công');
    }

    public function getInfo()
    {
        
        return view('page.personalAccount');
    }

    public function logout()
    {
        Auth::logout();
        return view('page.login');
    }

    public function Account()
    {
        $account = User::where('users.id','<>',0)
        ->join('role','users.role','=','role.id')
        ->get(['users.*','role.name as role_name']);
        // sort
        if(isset($_GET['sort_by']))
        {
             $sort_by = $_GET['sort_by'];
             //echo $sort_by;

             if($sort_by=='ketoan')
             {
                $account = User::where('role',1)        
                ->join('role','users.role','=','role.id')
                ->get(['users.*','role.name as role_name']);
             }elseif($sort_by=='bacsi')
             {
                $account = User::where('role',2)
                ->join('role','users.role','=','role.id')
                ->get(['users.*','role.name as role_name']);
             }
             elseif($sort_by=='letan')
             {
                $account = User::where('role',3)
                ->join('role','users.role','=','role.id')
                ->get(['users.*','role.name as role_name']);
             }
             elseif($sort_by=='none')
             {
                $account = User::where('id','<>',0)->get();

             }

        }

        return view('page.account',compact('account'));
    }

    public function searchAccount(Request $req)
    {
        $account = User::where('fullname','like','%'.$req->search.'%')->get();
        return view('page.account',compact('account'));
    }

    public function addAccount()
    {
        
        return view('page.addAccount');
    }

    public function postAddAccount(Request $req)
    {
        
        $account = new User();
        //$account->id = $req->id;
        $account->username = $req->username;
        $account->password = Hash::make($req->password);
        $account->email = $req->email;
        $account->fullname = $req->fullname;
        $account->phone = $req->phone;
        $account->role = $req->role;
        $account->status = $req->status;
        // dd($product);
        $account->save();

        return redirect()->route('account')->with('mes','Thêm tài khoản thành công');
    }

    public function getEditAccount($id)
    {
        $role = Role::all();
        $account = User::where('id',$id)->first();
        return view('page.editAccount',compact('account','role'));
    }

    public function postEditAccount($id, Request $req){
        $account = User::where('id',$id)->first();

        $account->fullname = $req->fullname;
        $account->phone = $req->phone;
        $account->email = $req->email;
        $account->role = $req->role;
        $account->username = $req->username;
        $account->status = $req->status;
        
        $account->save();
        return redirect()->route('account')->with("mes","Sửa thông tin tài khoản thành công");
    }
}
