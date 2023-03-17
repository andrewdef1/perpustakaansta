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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->uuid('nim');
            $table->uuid('user_id');
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};