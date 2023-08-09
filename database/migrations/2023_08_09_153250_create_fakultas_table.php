<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jurusan/fakultas', function (Blueprint $table) {
            $table->bigIncrements('id_jurusan/fakultas');
            $table->string('jurusan/fakultas');
            $table->string('kode_pt');
            $table->foreign('kode_pt')->references('kode_pt')->on('perguruan_tinggi')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
