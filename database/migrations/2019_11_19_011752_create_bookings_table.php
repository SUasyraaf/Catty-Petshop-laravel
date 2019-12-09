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
            $table->integer('num_of_days');
            $table->double('payment',5,2);
            

            //FOREIGN KEY
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');

            // $table->unsignedBigInteger('cat_id');
            // $table->foreign('cat_id')->references('id')->on('cats');

            // $table->unsignedBigInteger('package_id');
            // $table->foreign('package_id')->references('id')->on('packages');

            // $table->unsignedBigInteger('room_id');
            // $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // Schema::table('users', function (Blueprint $table){
        //     $table->dropColumn('user_id');
        // });

        // Schema::table('cats', function (Blueprint $table){
        //     $table->dropColumn('cat_id');
        // });

        // Schema::table('packages', function (Blueprint $table){
        //     $table->dropColumn('package_id');
        // });

        // Schema::table('rooms', function (Blueprint $table){
        //     $table->dropColumn('room_id');
        // });
        }
}

