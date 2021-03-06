<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('type');  
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('state_to');
			$table->text('address_to');			
			$table->string('state_from');
			$table->text('address_from');
			$table->string('vehicle');              
            $table->date('date');
            $table->time('time');
            $table->string('apartment')->nullable();
            $table->string('description')->nullable();
            $table->string('weight')->nullable();                     
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
