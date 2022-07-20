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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('Tenant');
            $table->string('Kode Informasi Tagihan');
            $table->string('Nama Informasi Tagihan');
            $table->string('Tagihan');
            $table->string('Tanggal Rilis');
            $table->string('Jatuh Tempo');
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
        Schema::dropIfExists('invoices');
    }
};
