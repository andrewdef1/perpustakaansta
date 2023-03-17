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
        Schema::create('buku', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('judul');
            $table->integer('tahun_terbit');
            $table->float('jumlah');
            $table->string('isbn');
            $table->text('pengarang');
            $table->uuid('penerbit_id');
            $table->string('kode_rak_id');
            $table->timestamps();

            $table->foreign('penerbit_id')->references('id')->on('penerbit');
            $table->foreign('kode_rak_id')->references('kode_rak')->on('rak');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};