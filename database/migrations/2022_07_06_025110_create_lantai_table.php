<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lantai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gedung');
            $table->string('nama_lantai');
            $table->string('harga_sewa');
            $table->string('service_charge');
            $table->string('service_charge_listrik_sendiri');
            $table->foreign('id_gedung')->references('id')->on('gedung');
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
        Schema::dropIfExists('lantai');
    }
};
