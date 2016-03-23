<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create customer_tb
		
		Schema::create('customer_tbs', function (Blueprint $table) {
			$table->engine = 'InnoDB';			
			
			$table->bigIncrements('id');
			$table->string('c_phone', 50)->nullable();
			$table->string('c_email', 128)->nulable()->default('customer@defaultemail.com');
			$table->string('c_firstname', 255)->nullable();
			$table->string('c_lastname', 255)->nullable();
			
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
        //Drop customer_tb table
		Schema::drop('customer_tbs');
    }
}
