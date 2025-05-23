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
        Schema::create("reviews", function (Blueprint $table) {
            $table->id();
            $table->integer("rating_value")->default(3);
            $table->string("review_text");
            $table->integer("order_id");
            $table->integer("customer_id");
            $table->integer("product_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
