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
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id'); // Use bigIncrements for the primary key
            $table->string('nama_material'); // Column for material name
            $table->string('unit'); // Column for unit of measurement
            $table->integer('harga'); // Column for price
            $table->string('brand'); // Column for brand
            $table->string('part_number'); // Column for part number
            $table->text('deskripsi'); // Column for description
            $table->timestamps(); // Automatically adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials'); // Drop the materials table if it exists
    }
};
?>