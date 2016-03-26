<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_tbs extends Model
{
    public function employee_skill_tbs()
	{
		return $this->hasMany('App\Employee_Skill_Tb', 'employee_id');
	}
}
