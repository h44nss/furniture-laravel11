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
            $table->string('nama_product');
            $table->string('kode_product')->default('P000');
            $table->string('harga_product');
            $table->string('stok_product');
            $table->string('deskripsi_product');
            $table->string('gambar_product');
            $table->string('kategori_product');
            $table->string('berat_product');
            $table->string('ukuran_product');
            $table->string('warna_product');
            $table->string('diskon_product');
            $table->string('status_product');
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
