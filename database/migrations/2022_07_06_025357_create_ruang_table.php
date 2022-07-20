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
        Schema::create('ruang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gedung');
            $table->unsignedBigInteger('id_lantai');
            $table->string('kode_ruang');
            $table->string('nama_ruang');
            $table->enum('status',['aktiv','disewa','disegel','dibooking','tidak aktiv']);
            $table->string('luas');
            $table->string('harga_bulan');
            $table->string('harga_hari');
            $table->string('overtime_dibawah_4jam');
            $table->string('total_overtime_dibawah_4jam');
            $table->string('overtime_diatas_4jam');
            $table->string('total_overtime_diatas_4jam');
            $table->json('fasilitas');
            $table->string('service_charge');
            $table->string('service_charge_sendiri');
            $table->string('foto_ruang');
            $table->longtext('deskripsi');
            $table->foreign('id_gedung')->references('id')->on('gedung');
            $table->foreign('id_lantai')->references('id')->on('lantai');
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
        Schema::dropIfExists('ruang');
    }
};
