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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigInteger('nim')->primary();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_pt');
            $table->foreign('kode_pt')->references('kode_pt')->on('perguruan_tinggi')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_jurusan/fakultas');
            $table->foreign('id_jurusan/fakultas')->references('id_jurusan/fakultas')->on('jurusan/fakultas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_mahasiswa');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->enum('jenis_kelamin', ['pria', 'wanita'])->default('pria');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
