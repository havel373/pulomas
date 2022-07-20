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
        Schema::create('additional_services', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('pic');
            $table->string('satuan');
            $table->string('harga');
            $table->enum('jangka',['langsung','berjangka']);
            $table->enum('jenis_pembayaran',['debit','kredit']);
            $table->string('foto');
            $table->longtext('Deskripsi');
            $table->foreign('pic')->references('id')->on('users');
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
        Schema::dropIfExists('additional_services');
    }
};
