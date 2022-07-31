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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_instansi');
            $table->string('nomor_hp_instansi')->unique();
            $table->string('nama_penanggungjawab');
            $table->string('nomor_hp_penanggungjawab')->unique();
            $table->string('nomor_ktp_penanggungjawab',16)->unique()->nullable();
            $table->string('nomor_npwp')->unique()->nullable();
            $table->string('ktp_penanggungjawab')->nullable();
            $table->string('npwp')->nullable();
            $table->json('industri');
            $table->json('status_tenant');
            $table->longtext('alamat_penanggungjawab');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tenants');
    }
};
