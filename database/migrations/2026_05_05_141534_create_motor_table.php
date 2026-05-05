<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor', function (Blueprint $table) {
            $table->bigIncrements('motor_id');
            $table->foreignId('pelanggan_id')->references('pelanggan_id')->on('pelanggan');
            $table->string('merk');
            $table->string('tipe')->nullable();
            $table->string('plat_nomor')->unique();
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
        Schema::dropIfExists('motor');
    }
}
