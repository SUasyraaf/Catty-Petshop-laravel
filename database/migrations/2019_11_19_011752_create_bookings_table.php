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

            //FOREIGN KEY
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');

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
<<<<<<< HEAD
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('user_id');
        });
        // Schema::table('packages', function (Blueprint $table){
=======
        // Schema::table('users', function (Blueprint $table){
        //     $table->dropColumn('user_id');
        // });
        // // Schema::table('packages', function (Blueprint $table){
>>>>>>> d99c9104b50f67a77e85e8508249723db52c5a87
        //     $table->dropColumn('package_id');
        // });
        // Schema::table('rooms', function (Blueprint $table){
        //     $table->dropColumn('room_id');
        // });

        //Method lain
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // Schema::dropIfExists('users');
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        // Schema::dropIfExists('packages');
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        // Schema::dropIfExists('rooms');
    }
}
