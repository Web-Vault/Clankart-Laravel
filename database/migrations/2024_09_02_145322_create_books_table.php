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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_title')->default('');
            $table->integer('category')->default(1);
            $table->string('type')->default('');
            $table->string('year')->default('');
            $table->string('book-image')->default('/product_image/default_product_iamge.jpg');
            $table->integer('stock')->default(0);
            $table->string('condition')->default('');
            $table->string('description', 255)->default('');
            $table->string('author_name')->default('');
            $table->string('seller_name')->default('');
            $table->integer('seller_id')->default('');
            $table->integer('price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
