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
        Schema::create('ph', function (Blueprint $table) {
            $table->id();
            $table->string('no_kwph');
            $table->string('uraian_ph');
            $table->string('jumlah_ph');
            $table->string('harga_ph');
            $table->string('total_ph');
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
        Schema::dropIfExists('ph');
    }
};
