<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Nama produk
        'description', // Deskripsi produk
        'price',       // Harga produk
        'stock',       // Stok produk
    ];
}
?>