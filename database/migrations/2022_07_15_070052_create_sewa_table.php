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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->enum('booking',['ya','tidak']);
            $table->string('kode_booking')->nullable();
            $table->unsignedBigInteger('gedung_id');
            $table->unsignedBigInteger('lantai_id');
            $table->unsignedBigInteger('ruang_id');
            $table->string('jangka_waktu');
            $table->date('tanggal_awal_sewa');
            $table->date('tanggal_akhir_sewa');
            $table->string('jenis_service_charge');
            $table->enum('ppn',['dibayarkan manajemen','dibayarkan tenant']);
            $table->enum('luas_ruangan',['kurangi luas','tambah luas','tidak ada']);
            $table->unsignedBigInteger('marketing_id');
            $table->longtext('keterangan');
            $table->json('additional_service')->nullable();
            $table->string('total_harga');
            $table->enum('status',['proses check','approved','ditolak','request pembatalan','dibatalkan']);
            $table->foreign('gedung_id')->references('id')->on('gedung');
            $table->foreign('lantai_id')->references('id')->on('lantai');
            $table->foreign('ruang_id')->references('id')->on('ruang');
            $table->foreign('marketing_id')->references('id')->on('users');
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
        Schema::dropIfExists('sewa');
    }
};
