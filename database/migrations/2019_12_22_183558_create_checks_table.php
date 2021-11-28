<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('emp_id')->unsigned();

            $table->dateTime('attendance_time');
            $table->dateTime('leave_time')->nullable();

            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');

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
        Schema::table('checks', function (Blueprint $table) {
            $table->dropForeign(['emp_id']);
        });

        Schema::dropIfExists('checks');
    }
}
