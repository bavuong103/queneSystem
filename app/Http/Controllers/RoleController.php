<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function role(){
        return view('page.role');
    }

    public function addRole(){
        return view('page.addRole');
    }
}
