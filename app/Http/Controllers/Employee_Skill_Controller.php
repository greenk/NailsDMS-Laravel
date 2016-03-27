<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EmployeeSkillFormRequest;

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
		/*
		$new_skill = new Employee_Skill_Tb();

		$new_skill->employee_id = $request->get('employee_id');
		*/
		$array_skill = $request->get('skills');
		$employee_id = $request->get('employee_id');

		if(is_array($array_skill))
		{
			foreach($array_skill as $skill)
			{
				$new_skill = Employee_Skill_Tb::where('employee_id',$employee_id)->where('e_skill', $skill)->first();
				if(!$new_skill) {
					$new_skill = new Employee_Skill_Tb();
					$new_skill->employee_id = $employee_id;
					$new_skill->e_skill = $skill;
					$new_skill->save();
				}
			}
		}

		return redirect()->back()->with('status', 'You added new skill ' . implode("; ", $array_skill));
		
	}
}
