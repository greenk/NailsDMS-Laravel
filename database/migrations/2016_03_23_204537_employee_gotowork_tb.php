<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeGotoworkTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create employee_gotowork_tbs
		
		Schema::create('employee_gotowork_tbs', function (Blueprint $table) {
			$table->engine = 'InnoDB';			
			
			$table->dateTime('date_at_work');
			$table->dateTime('time_at_work');
			$table->dateTime('time_leave_work')->nullable();
			
			$table->integer('employee_id')->unsigned();			
			
			$table->primary(['date_at_work', 'employee_id']);
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
        //Drop employee_gotowork_tb
		Schema::drop('employee_gotowork_tbs');
    }
}
