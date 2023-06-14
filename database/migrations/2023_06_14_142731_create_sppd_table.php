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
        Schema::create('sppd', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sppd');
            $table->string('no_kwsppd');
            $table->string('uraian_sppd');
            $table->string('kendaraan');
            $table->string('harga_t');
            $table->string('penginapan');
            $table->string('harga_p');
            $table->string('harian');
            $table->string('representasi');
            $table->string('hari');
            $table->string('total');
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
        Schema::dropIfExists('sppd');
    }
};
