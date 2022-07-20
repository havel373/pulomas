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
        Schema::create('lantais', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('Nama Gedung');
            $table->string('Nama Lantai');
            $table->string('Harga Sewa');
            $table->string('Service Charge (Termasuk Listrik)');
            $table->string('Service Charge Listrik Sendiri');
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
        Schema::dropIfExists('lantais');
    }
};
