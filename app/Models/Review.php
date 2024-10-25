<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',      // ID produk yang di-review
        'rating',          // Rating dari review
        'comment',         // Komentar dari reviewer
        'reviewer_name',   // Nama reviewer
        'reviewer_email',  // Email reviewer
    ];

    // Relasi dengan model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
?>