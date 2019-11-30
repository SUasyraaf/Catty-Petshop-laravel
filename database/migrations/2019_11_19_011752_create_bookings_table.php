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
            $table->bigIncrements('id');
            $table->date('day_in');
            $table->date('day_out');
            $table->double('payment',5,2);
            $table->timestamps();
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');

            // $table->unsignedBigInteger('package_id');
            // $table->foreign('package_id')->references('id')->on('packages');

            // $table->unsignedBigInteger('room_id');
            // // $table->foreign('room_id')->references('id')->on('rooms');
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
