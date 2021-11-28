<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatetimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latetimes', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('emp_id')->unsigned();
            $table->time('duration');
            $table->date('latetime_date');

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
        
        Schema::table('latetimes', function (Blueprint $table) {
            $table->dropForeign(['emp_id']);
           });
   

        Schema::dropIfExists('latetimes');
    }
}
