<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkTypeTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create work_type_tb
		
		Schema::create('work_type_tbs', function (Blueprint $table) {
			$table->engine = 'InnoDB';			
			
			$table->increments('id');
			$table->string('work_name', 255);
			$table->string('work_category', 128)->default('Other');
			$table->text('description')->nullable();
			$table->float('work_price', 10,2)->default(00.00);
			
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
        //Drop work_type_tb table
		Schema::drop('work_type_tbs');
    }
}
