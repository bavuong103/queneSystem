<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\AccountController@login'
]);

Route::post('login',[
    'as'=>'login',
    'uses'=>'App\Http\Controllers\AccountController@postLogin'
]);

Route::get('changepassword',[
    'as'=>'changepassword',
    'uses'=>'App\Http\Controllers\AccountController@getChangePassword'
]);

Route::post('checkemail',[
    'as'=>'checkemail',
    'uses'=>'App\Http\Controllers\AccountController@postCheckEmail'
]);

Route::get('confirmpassword',[
    'as'=>'confirmpassword',
    'uses'=>'App\Http\Controllers\AccountController@getConfirmPassword'
]);

Route::post('confirmpassword',[
    'as'=>'confirmpassword',
    'uses'=>'App\Http\Controllers\AccountController@postConfirmPassword'
]);

Route::get('personnalAccount',[
    'as'=>'personnalAccount',
    'uses'=>'App\Http\Controllers\AccountController@getInfo'
]);

Route::get('logout',[
    'as'=>'logout',
    'uses'=>'App\Http\Controllers\AccountController@logout'
]);

Route::get('index',[
    'as'=>'index',
    'uses'=>'App\Http\Controllers\HomeController@index'
]);

Route::get('device',[
    'as'=>'device',
    'uses'=>'App\Http\Controllers\DeviceController@device'
]);

Route::get('searchDevice',[
    'as'=>'searchDevice',
    'uses'=>'App\Http\Controllers\DeviceController@searchDevice'
]);

Route::get('addDevice',[
    'as'=>'addDevice',
    'uses'=>'App\Http\Controllers\DeviceController@getAddDevice'
]);

Route::post('addDevice',[
    'as'=>'addDevice',
    'uses'=>'App\Http\Controllers\DeviceController@postAddDevice'
]);

Route::get('detailsDevice/{id}',[
    'as'=>'detailsDevice',
    'uses'=>'App\Http\Controllers\DeviceController@getDetailsDevice'
]);

Route::get('editDevice',[
    'as'=>'editDevice',
    'uses'=>'App\Http\Controllers\DeviceController@getEditDevice'
]);