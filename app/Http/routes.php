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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
	
	Route::get('/employee', 'employee_detail_controller@index');
	Route::get('/employee/save', 'employee_detail_controller@save_employee');
	
	Route::get('/employee/create', 'employee_detail_controller@create_employee');

});
