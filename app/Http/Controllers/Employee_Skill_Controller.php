<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employee_Skill_Tb;
use App\employee_tbs;

class Employee_Skill_Controller extends Controller
{
    //
	/**
	 * Add new skill for employee
	 *
	 */
	public function add_employee_skill($id, EmployeeSkillFormRequest $request)
	{
		$skill = new Employee_Skill_Tb;
		
	}
}
