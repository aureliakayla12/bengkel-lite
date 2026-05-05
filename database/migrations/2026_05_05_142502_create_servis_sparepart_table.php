<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisSparepartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis_sparepart', function (Blueprint $table) {
            $table->bigIncrements('servis_sparepart_id');
            $table->foreignId('servis_id')->references('servis_id')->on('servis');
            $table->foreignId('sparepart_id')->references('sparepart_id')->on('sparepart');
            $table->integer('qty');
            $table->integer('harga'); // harga saat transaksi
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
        Schema::dropIfExists('servis_sparepart');
    }
}
