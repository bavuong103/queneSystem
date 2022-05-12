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

Route::get('dashboard',[
    'as'=>'dashboard',
    'uses'=>'App\Http\Controllers\HomeController@dashboard'
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

Route::get('editDevice/{id}',[
    'as'=>'editDevice',
    'uses'=>'App\Http\Controllers\DeviceController@getEditDevice'
]);

Route::post('editDevice/{id}',[
    'as'=>'editDevice',
    'uses'=>'App\Http\Controllers\DeviceController@postEditDevice'
]);

Route::get('service',[
    'as'=>'service',
    'uses'=>'App\Http\Controllers\ServiceController@service'
]);

Route::get('searchService',[
    'as'=>'searchService',
    'uses'=>'App\Http\Controllers\ServiceController@searchService'
]);

Route::get('addService',[
    'as'=>'addService',
    'uses'=>'App\Http\Controllers\ServiceController@getAddService'
]);

Route::post('addService',[
    'as'=>'addService',
    'uses'=>'App\Http\Controllers\ServiceController@postAddService'
]);

Route::get('detailsService',[
    'as'=>'detailsService',
    'uses'=>'App\Http\Controllers\ServiceController@getdetailsService'
]);

Route::get('editService/{id}',[
    'as'=>'editService',
    'uses'=>'App\Http\Controllers\ServiceController@getEditService'
]);

Route::post('editService/{id}',[
    'as'=>'editService',
    'uses'=>'App\Http\Controllers\ServiceController@postEditService'
]);

Route::get('detailsService/{id}',[
    'as'=>'detailsService',
    'uses'=>'App\Http\Controllers\ServiceController@getDetailsService'
]);

Route::get('searchTime',[
    'as'=>'searchTime',
    'uses'=>'App\Http\Controllers\ServiceController@searchTime'
]);

Route::get('number',[
    'as'=>'number',
    'uses'=>'App\Http\Controllers\NumberController@number'
]);

Route::get('addNumber',[
    'as'=>'addNumber',
    'uses'=>'App\Http\Controllers\NumberController@getAddNumber'
]);

Route::get('detailsNumber/{id}',[
    'as'=>'detailsNumber',
    'uses'=>'App\Http\Controllers\NumberController@getdetailsNumber'
]);

Route::post('addNumber',[
    'as'=>'addNumber',
    'uses'=>'App\Http\Controllers\NumberController@postAddNumber'
]);

Route::get('searchNumber',[
    'as'=>'searchNumber',
    'uses'=>'App\Http\Controllers\NumberController@searchNumber'
]);

Route::get('searchTimeNumber',[
    'as'=>'searchTimeNumber',
    'uses'=>'App\Http\Controllers\NumberController@searchTimeNumber'
]);

Route::get('report',[
    'as'=>'report',
    'uses'=>'App\Http\Controllers\ReportController@report'
]);

Route::get('searchTimeReport',[
    'as'=>'searchTimeReport',
    'uses'=>'App\Http\Controllers\ReportController@searchTimeReport'
]);

Route::get('printReport',[
    'as'=>'printReport',
    'uses'=>'App\Http\Controllers\ReportController@printReport'
]);

Route::get('role',[
    'as'=>'role',
    'uses'=>'App\Http\Controllers\RoleController@role'
]);

Route::get('addRole',[
    'as'=>'addRole',
    'uses'=>'App\Http\Controllers\RoleController@addRole'
]);