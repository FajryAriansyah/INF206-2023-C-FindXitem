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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('kategori');
            $table->string('warna_dasar');
            $table->string('warna_sekunder')->nullable();
            $table->string('image')->nullable();
            $table->string('brand')->nullable();
            $table->string('lokasi');
            $table->date('waktu');
            $table->string('nama_penemu');
            $table->string('noHp');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
