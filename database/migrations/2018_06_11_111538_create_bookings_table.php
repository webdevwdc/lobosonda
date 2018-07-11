<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up(){
		Schema::create('bookings', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('trip_id');
			$table->unsignedInteger('customer_id');
			$table->string('message');
			$table->dateTime('book_date');
			$table->enum('status', array('Accept','Reject','cancel'))->default('Accept');
			$table->string('note');
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
        Schema::dropIfExists('bookings');
    }
}
