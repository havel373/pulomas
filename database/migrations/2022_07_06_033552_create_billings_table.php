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
            $table->unsignedBigInteger('tenant_id');
            $table->enum('status',['proses','lunas','belum lunas','expired','surat peringatan','cancel']);
            $table->string('kode_informasi_tagihan');
            $table->string('nama_informasi_tagihan');
            $table->string('tagihan');
            $table->date('tanggal_informasi_tagihan');
            $table->date('jatuh_tempo');
            $table->string('konfirmasi_pembayaran');
            $table->foreign('tenant_id')->references('id')->on('tenants');
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
