<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('emp_id')->unsigned();
            $table->time('leave_time')->default(date("H:i"));
            $table->date('leave_date');
            $table->boolean('status')->default(1);


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
        
        Schema::table('leaves', function (Blueprint $table) {
         $table->dropForeign(['emp_id']);
        });

        Schema::dropIfExists('leaves');
    }
}
