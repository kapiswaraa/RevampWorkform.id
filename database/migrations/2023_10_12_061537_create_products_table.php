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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('informasi');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->integer('harga');
            $table->string('username');
            $table->string('nomor_penjual');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('kamar_mandi');
            $table->string('periode');
            $table->integer('kapasitas');
            $table->string('deskripsi');
            $table->text('thumbnail');
            $table->text('foto1');
            $table->text('foto2');
            $table->text('foto3');
            $table->text('foto4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
