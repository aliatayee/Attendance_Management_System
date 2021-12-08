<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFingerDevicesTable extends Migration
{
    public function up()
    {
        Schema::create('finger_devices', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->ipAddress('ip');
            $table->string('serialNumber')->unique();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('finger_devices');
    }
}
