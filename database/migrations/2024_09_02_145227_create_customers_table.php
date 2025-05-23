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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('profile_picture')->default('/customer_images/default-profile-picture.jpg');
            $table->string('firstname');
            $table->string('lastname')->default('');
            $table->string('email')->default('');
            $table->string('password')->default('');
            $table->bigInteger('mobile_number')->default(1234567890);
            $table->string('address', 255)->default('');
            $table->string('token');
            $table->integer('pincode')->default(123456);
            $table->boolean('activate')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
