<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::group(['middleware' => 'web'], function(){
    Route::auth();
});

Route::group(['middleware' => ['web','auth']], function(){
//    Route::get('/home_admin','HomeController@index');
    Route::get('/', 'HomeController@index');

    Route::get('admin', 'HomeController@admin');

    Route::get('admin/contents/dashboard', 'NavController@dashboard');
    Route::get('admin/contents/employees', 'NavController@employees');

    Route::get('admin/employees/create', 'EmployeesController@create');
    Route::post('admin/employees', 'EmployeesController@store');
    Route::delete('admin/employees/{employee}', 'EmployeesController@destroy');

    Route::get('settings', 'EmployeesController@edit');
    Route::get('admin/settings', 'AdminController@edit');
    Route::put('settings/user/{user}', 'EmployeesController@update');
});

Route::post('new-login', 'AuthController@newLogin');