<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('page.login');
        }
        
    }
}
