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
        Schema::create('peminjaman_buku', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('peminjaman_id');
            $table->uuid('buku_id');
            $table->timestamps();

            $table->foreign('peminjaman_id')->references('id')->on('peminjaman');
            $table->foreign('buku_id')->references('id')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_buku');
    }
};