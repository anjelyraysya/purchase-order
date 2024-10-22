<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',        // Judul produk
        'brand',        // Merek produk
        'category',     // Kategori produk
        'price',        // Harga produk
        'stock',        // Stok produk
        'description',  // Deskripsi produk
        'thumbnail',    // Gambar thumbnail produk
    ];
}
?>