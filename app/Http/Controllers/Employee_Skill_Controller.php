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

		$deleted = array();
		$added = array();

		if(is_array($array_skill))
		{
			/* Delete skills from table if they are not in array_skill list */
			$current_skills = Employee_Skill_Tb::where('employee_id', $employee_id)->get();
			foreach($current_skills as $exist_skill)
			{
				if(!in_array($exist_skill->e_skill, $array_skill))
				{
					Employee_Skill_Tb::where('employee_id', $employee_id)->where('e_skill', $exist_skill->e_skill)->delete();
					array_push($deleted, $exist_skill->e_skill);
				}

			}

			/* Add new skills to table if they are not in table */
			foreach($array_skill as $skill)
			{
				$current_skill = Employee_Skill_Tb::where('employee_id',$employee_id)->where('e_skill', $skill)->first();
				if(!$current_skill) {
					$new_skill = new Employee_Skill_Tb();
					$new_skill->employee_id = $employee_id;
					$new_skill->e_skill = $skill;
					$new_skill->save();

					array_push($added, $skill);
				}
			}
		}

		$message_status = '';
		if (count($added) > 0)
			$message_status .= 'You added new skill ' . implode("; ", $added);
		if (count($deleted) > 0)
			$message_status .= ' You deleted ' . implode("; ", $deleted);

		return redirect()->back()->with('status', $message_status );
		
	}
}
