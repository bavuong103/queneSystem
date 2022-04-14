<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            return view('page.index');
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
}
