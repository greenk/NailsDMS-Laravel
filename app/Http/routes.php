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
	
	Route::post('/employee/edit/skill/{id}', 'Employee_Skill_Controller@add_employee_skill')->where('id', '[0-9]+');
	
	Route::get('/employee/create', 'employee_detail_controller@create_employee');
	Route::post('/employee/create', 'employee_detail_controller@save_employee');

	Route::get('/blog', 'BlogController@index');
	//Route::get('/blog/{slug?}', 'BlogController@show');

	Route::get('users/register', 'Auth\AuthController@getRegister');
	Route::post('users/register', 'Auth\AuthController@postRegister');

	Route::get('users/login', 'Auth\AuthController@getLogin');
	Route::post('users/login', 'Auth\AuthController@postLogin');

	//Route::get('users/logout', 'Auth\AuthController@getLogout');
	Route::get('users/logout', 'Auth\AuthController@getLogout');

	Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
		Route::get('users', ['as' => 'admin.user.index', 'uses' => 'UsersController@index']);

		Route::get('roles', 'RolesController@index');
		Route::get('roles/create', 'RolesController@create');
		Route::post('roles/create', 'RolesController@store');

		Route::get('users/{id?}/edit', 'UsersController@edit');
		Route::post('users/{id?}/edit', 'UsersController@update');

		Route::get('/', 'PagesController@home');

		Route::get('posts', 'PostsController@index');
		Route::get('posts/create', 'PostsController@create');
		Route::post('posts/create', 'PostsController@store');
		Route::get('posts/{id?}/edit', 'PostsController@edit');
		Route::post('posts/{id?}/edit','PostsController@update');

		Route::get('categories', 'CategoriesController@index');
		Route::get('categories/create', 'CategoriesController@create');
		Route::post('categories/create', 'CategoriesController@store');


	});


});
