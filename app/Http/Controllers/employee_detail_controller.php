<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\employee_tbs;

class employee_detail_controller extends Controller
{
    /**
	 * Show all user information 
	 *
	 */	 
	public function index()
	{
		$employees = employee_tbs::all();
		
		//$employee_arr = $employees->all();
		
		//return $employees->count();
		/*
		$employee=[];
		
		foreach ($employees as $each_employee) {
			$employee['e_first_name'] = $each_employee->e_first_name;
			$employee['e_last_name'] = $each_employee->e_last_name;
			break;
		}
		*/
		
		//return $employee_arr;
		return view('employee_view.employee')->with('employees',$employees);
		
		//return $employee;
	}
	
	/**
	 * Show a create form for employee to register 
	 *
	 */
	public function create_employee()
	{
		return view('employee_view.employee_create');
	}
	
	/**
	 * Create new employee and save to employee table
	 *
	 */
	public function save_employee(Request $request)
	{
		// Validate the request...
		
		$new_employee = new employee_tbs;
		
		$new_employee->e_phone = '615-256-4230';
		$new_employee->e_email = 'nailsdms@gmail.com';
		$new_employee->e_first_name = 'Peter';
		$new_employee->e_last_name = 'Park';
		$new_employee->e_street = '6800 Charlotte Pike';
		$new_employee->e_city = 'Nashville';
		$new_employee->e_state = 'TN';
		$new_employee->e_zip = '37209';
		
		$new_employee->e_password = 'password1';
		$new_employee->e_at_work = 0;
		$new_employee->e_working = 0;
		$new_employee->e_avatar_url = '/myavatar.png';
		
		// Save model to database
		$new_employee->save();
		
		return "Success fully!!!";
	}
}
