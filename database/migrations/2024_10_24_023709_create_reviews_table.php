<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap review
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // ID produk yang di-review
            $table->integer('rating'); // Rating dari review
            $table->text('comment'); // Komentar dari reviewer
            $table->string('reviewer_name'); // Nama reviewer
            $table->string('reviewer_email'); // Email reviewer
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
?>