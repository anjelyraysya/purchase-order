<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_number',    // Nomor pesanan
        'supplier_id',     // ID supplier
        'order_date',      // Tanggal pesanan
        'total_amount',    // Total jumlah pesanan
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'order_date' => 'datetime',
            'total_amount' => 'decimal:2',
        ];
    }

    /**
     * Relation to Supplier (assuming each PurchaseOrder belongs to a Supplier)
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    /**
     * Relation to OrderItems (assuming each PurchaseOrder has many items)
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
?>