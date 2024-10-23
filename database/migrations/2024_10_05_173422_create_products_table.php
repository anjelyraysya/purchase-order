<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Judul produk
            $table->text('description'); // Deskripsi produk
            $table->string('category'); // Kategori produk
            $table->decimal('price', 10, 2); // Harga produk
            $table->decimal('discount', 5, 2)->nullable(); // Diskon produk
            $table->decimal('rating', 3, 2)->nullable(); // Rating produk
            $table->integer('stock'); // Stok produk
            $table->string('thumbnail'); // Gambar thumbnail produk
            $table->string('tags')->nullable(); // Tags produk
            $table->string('sku')->nullable(); // SKU produk
            $table->decimal('weight', 10, 2)->nullable(); // Berat produk
            $table->decimal('width', 10, 2)->nullable(); // Lebar produk
            $table->decimal('height', 10, 2)->nullable(); // Tinggi produk
            $table->decimal('depth', 10, 2)->nullable(); // Kedalaman produk
            $table->string('warranty_info')->nullable(); // Informasi garansi
            $table->string('shipping_info')->nullable(); // Informasi pengiriman
            $table->string('availability_status'); // Status ketersediaan
            $table->string('return_policy')->nullable(); // Kebijakan pengembalian
            $table->integer('minimum_order_quantity')->nullable(); // Kuota pesanan minimum
            $table->string('barcode')->nullable(); // Barcode produk
            $table->string('qr_code')->nullable(); // Kode QR produk
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
?>