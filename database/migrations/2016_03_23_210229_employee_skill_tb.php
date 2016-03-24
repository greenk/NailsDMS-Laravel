<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeSkillTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create employee_skill_tb
		
		Schema::create('employee_skill_tbs', function (Blueprint $table) {
			$table->engine = 'InnoDB';			
			
			$table->integer('employee_id')->unsigned();			
			$table->string('e_skill', 128);
			
			$table->primary(['e_skill', 'employee_id']);
			$table->foreign('employee_id')->references('id')->on('employee_tbs');			
			
			// Add this column for using migration
			$table->timestamps();
			
			
		
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop employee_skill_tb table
		Schema::dropIfExists('employee_skill_tbs');
    }
}
