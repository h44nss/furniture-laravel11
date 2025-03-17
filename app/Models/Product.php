<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $guarded = [];
    protected $table = 'products'; // Nama tabel
    protected $fillable =
    [
        'nama_product',
        'kode_product',
        'harga_product',
        'stok_product',
        'deskripsi_product',
        'gambar_product',
        'kategori_product',
        'berat_product',
        'ukuran_product',
        'warna_product',
        'diskon_product',
        'status_product',
        'created_at',
        'updated_at'
    ]; // Sesuaikan dengan kolom
}
