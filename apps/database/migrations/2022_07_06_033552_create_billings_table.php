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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('Status Informasi Tagihan');
            $table->string('Tenant');
            $table->string('Kode Informasi Tagihan');
            $table->string('Nama Informasi Tagihan');
            $table->string('Tagihan');
            $table->string('Tanggal Informasi Tagihan');
            $table->string('Jatuh Tempo');
            $table->string('Konfirmasi Pembayaran');
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
        Schema::dropIfExists('billings');
    }
};
