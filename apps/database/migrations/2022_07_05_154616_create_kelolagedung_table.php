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
        Schema::create('kelolagedung', function (Blueprint $table) {
            $table->id();
            $table->Integer('No');
            $table->String('Nama_Gedung');
            $table->String('Kode_Asset');
            $table->String('Alamat_Gedung');
            $table->String('Aksi');
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
        Schema::dropIfExists('kelolagedung');
    }
};
