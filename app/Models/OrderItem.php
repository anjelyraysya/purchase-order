<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'purchase_order_id', // ID pesanan pembelian
        'product_id',        // ID produk
        'quantity',          // Jumlah item
        'unit_price',        // Harga per unit
        'total_price',       // Total harga untuk item ini
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at', 
        'updated_at',
    ];

    /**
     * Relation to PurchaseOrder (assuming each OrderItem belongs to a PurchaseOrder)
     */
    public function purchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class);
    }

    /**
     * Relation to Product (assuming each OrderItem belongs to a Product)
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
?>