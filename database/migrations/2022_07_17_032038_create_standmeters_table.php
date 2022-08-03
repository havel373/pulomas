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
        Schema::create('standmeters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id')->nullable();
            $table->string('daya');
            $table->string('foto_standmeter');
            $table->string('standmeter_awal');
            $table->string('standmeter_akhir');
            $table->string('pemakaian');
            $table->string('biaya_pemakaian');
            $table->string('bpju');
            $table->string('jumlah_tagihan');
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
        Schema::dropIfExists('standmeters');
    }
};
