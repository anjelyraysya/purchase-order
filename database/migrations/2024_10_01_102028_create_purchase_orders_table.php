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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->bigIncrements('id'); // Use bigIncrements for the primary key
            $table->string('nama_pembelian'); // Column for purchase name
            $table->integer('jumlah_pembelian'); // Column for purchase quantity
            $table->date('tanggal'); // Column for purchase date
            $table->unsignedBigInteger('material_id'); // Foreign key for material
            $table->unsignedBigInteger('supplier_id'); // Foreign key for supplier
            $table->text('deskripsi'); // Column for description
            $table->timestamps(); // Automatically adds created_at and updated_at columns

            // Foreign keys
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders'); // Drop the purchase_orders table if it exists
    }
};
?>