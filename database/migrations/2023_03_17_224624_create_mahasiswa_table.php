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
            $table->uuid('id')->primary();
            $table->string('nim')->unique()->index();
            $table->string('nama_mhs');
            // $table->uuid('fakultas_id')->nullable();
            $table->uuid('prodi_id');
            $table->string('telpon')->nullable();
            $table->timestamps();

            // $table->foreign('fakultas_id')->references('id')->on('fakultas');
            $table->foreign('prodi_id')->references('id')->on('program_studi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};