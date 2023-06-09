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
        Schema::create('modal', function (Blueprint $table) {
            $table->id();
            $table->string('no_kwmdl');
            $table->string('uraian_modal');
            $table->string('jumlah_modal');
            $table->string('harga_modal');
            $table->string('total_modal');
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
        Schema::dropIfExists('modal');
    }
};
