<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Skill_Tb extends Model
{
    // all mass assignable exept the id column
	protected $guarded = ['id'];

	// Set table for this model
	protected $table = 'employee_skill_tbs';
	
	//add a relationship to employee_tbs
	public function employee_tbs()
	{
		return $this->belongsTo('App\employee_tbs');
	}
}
