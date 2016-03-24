<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create employee table
		Schema::create('employee_tbs', function (Blueprint $table) {
			$table->engine = 'InnoDB';			
			
			$table->increments('id');
			$table->string('e_phone', 50);
			$table->string('e_email', 128)->nullable();
			$table->string('e_first_name', 128);
			$table->string('e_last_name', 128);
			$table->string('e_street', 255)->nullable();
			$table->string('e_city', 255)->nullable();
			$table->string('e_state', 128)->nullable();
			$table->string('e_zip', 128)->nullable();
			
			$table->string('e_password', 255);
			$table->tinyInteger('e_at_work');
			$table->tinyInteger('e_working');
			$table->dateTime('e_check_in');
			$table->dateTime('e_check_out');
			
			$table->string('e_avatar_url', 2083);
			
			// Add this column for using migration
			$table->timestamps();
			
			// Add this for remember user session
			$table->rememberToken();
			
			// Do not need this because increment() also sets primary key
			//$table->primary('e_id');
		
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop employee table
		Schema::dropIfExists('employee_tbs');
    }
}
