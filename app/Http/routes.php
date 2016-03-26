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
		
	Route::get('/employee/edit/{id}', 'employee_detail_controller@get_employee_update')->where('id', '[0-9]+');
	Route::post('/employee/edit/{id}', 'employee_detail_controller@post_employee_update')->where('id', '[0-9]+');
	Route::get('/employee/{id}', 'employee_detail_controller@get_employee_detail')->where('id', '[0-9]+');
	
	Route::post('/employee/{id}/skill', 'Employee_Skill_Controller@add_employee_skill')->where('id', '[0-9]+');
	
	Route::get('/employee/create', 'employee_detail_controller@create_employee');
	Route::post('/employee/create', 'employee_detail_controller@save_employee');

});
