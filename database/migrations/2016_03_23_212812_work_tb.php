<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create work_tb
		
		Schema::create('work_tbs', function (Blueprint $table) {
			$table->engine = 'InnoDB';			
			
			$table->bigIncrements('id');
			
			$table->datetime('work_created_date');
			$table->datetime('work_started_date')->nullable();
			$table->datetime('work_finished_date')->nullable();			
			$table->string('work_status', 255)->nullable();			
			
			$table->float('total', 10,2)->default(00.00);
			$table->float('total_tip', 10,2)->default(00.00);
			$table->float('cash_amount', 10,2)->default(00.00);			
			$table->float('card_amount', 10,2)->default(00.00);
			$table->float('gift_amount', 10,2)->default(00.00);
			
			$table->float('cash_tip_amount', 10,2)->default(00.00);
			$table->float('card_tip_amount', 10,2)->default(00.00);			
			$table->float('gift_tip_amount', 10,2)->default(00.00);
			
			$table->integer('request_for')->nullable();
			
			
			$table->integer('employee_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->integer('work_type_id')->unsigned();
			
			$table->foreign('employee_id')->references('id')->on('employee_tbs');
			$table->foreign('customer_id')->references('id')->on('customer_tbs');
			$table->foreign('work_type_id')->references('id')->on('work_type_tbs');
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
        //Drop work_tbs table
		Schema::dropIfExists('work_tbs');
    }
}
