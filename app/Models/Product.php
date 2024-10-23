<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',                     
        'description',               
        'category',                  
        'price',                     
        'discount',                  
        'rating',                    
        'stock',                     
        'thumbnail',                 
        'tags',                      
        'sku',                       
        'weight',                    
        'width',                     
        'height',                    
        'depth',                     
        'warranty_info',             
        'shipping_info',             
        'availability_status',       
        'return_policy',             
        'minimum_order_quantity',    
        'barcode',                   
        'qr_code',                   
    ];
}
?>