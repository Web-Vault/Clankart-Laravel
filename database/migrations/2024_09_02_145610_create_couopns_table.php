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
        Schema::create('couopns', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code');
            $table->integer('applicable_amount');
            $table->integer('discount_value');
            $table->string('activation_time');
            $table->string('deactivation_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couopns');
    }
};
