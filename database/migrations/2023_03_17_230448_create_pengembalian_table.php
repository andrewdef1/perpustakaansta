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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('tgl_pengembalian');
            $table->float('denda');
            $table->uuid('peminjaman_id');
            $table->uuid('user_id');
            $table->timestamps();

            $table->foreign('peminjaman_id')->references('id')->on('peminjaman');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian');
    }
};