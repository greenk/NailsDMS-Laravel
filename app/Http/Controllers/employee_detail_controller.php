<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateNewEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

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
				
		return view('employee_view.employee')->with('employees',$employees);
		
		
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
	public function save_employee(CreateNewEmployeeRequest $request)
	{
		// Validate the request...
		
		//return $request->all();
				
		$new_employee = new employee_tbs;
		
		$new_employee->e_phone = $request->get('e_phone');
		$new_employee->e_email = $request->get('e_email');
		$new_employee->e_first_name = $request->get('e_first_name');
		$new_employee->e_last_name = $request->get('e_last_name');
		$new_employee->e_street = $request->get('e_street');
		$new_employee->e_city = $request->get('e_city');
		$new_employee->e_state = $request->get('e_state');
		$new_employee->e_zip = $request->get('e_zip');
		
		$new_employee->e_password = $request->get('e_password');
		$new_employee->e_at_work = 0;
		$new_employee->e_working = 0;
		$new_employee->e_avatar_url = '/myavatar.png';
		
		// Save model to database
		$new_employee->save();
		
		return redirect('/employee')->with('status', 'The employee ' . $new_employee->e_first_name . ' ' . $new_employee->e_last_name . ' has been successfully created' );
		
	}
	
	/**
	 * Show employee's detail
	 *
	 */
	public function get_employee_detail( $id )
	{
		$employee = employee_tbs::where('id', $id)->firstOrFail();
		
		return view('employee_view.detail', compact('employee'));
	}
	
	/**
	 * Show Edit page for specific employee
	 *
	 */
	public function get_employee_update ($id)
	{
		$employee = employee_tbs::where('id', $id)->firstOrFail();
		
		return view('employee_view.update', compact('employee'));
			
	}
	/**
	 * Update specific employee in database
	 *
	 */
	public function post_employee_update ($id, UpdateEmployeeRequest $request)
	{
		$employee = employee_tbs::where('id', $id)->firstOrFail();
		
		$employee->e_phone = $request->get('phone');
		$employee->e_email = $request->get('email');
		$employee->e_first_name = $request->get('first_name');
		$employee->e_last_name = $request->get('last_name');
		$employee->e_street = $request->get('address');
		$employee->e_city = $request->get('city');
		$employee->e_state = $request->get('state');
		$employee->e_zip = $request->get('zipcode');
		
		$employee->e_password = $request->get('password');
		$employee->e_at_work = 0;
		$employee->e_working = 0;
		$employee->e_avatar_url = '/myavatar.png';
		
		$employee->save();
		
		return redirect(action('employee_detail_controller@get_employee_update', $employee->id))->with('status', 'Updating for ' . $employee->e_first_name . ' ' . $employee->e_last_name . ' has been succeed!!!');		
		
			
	}
	 
}
