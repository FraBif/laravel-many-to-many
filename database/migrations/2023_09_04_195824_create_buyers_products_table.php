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
        Schema::create('buyers_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->foreign('product_name')->references('name')->on('products');
            $table->string('buyer_username');
            $table->foreign('buyer_username')->references('username')->on('buyers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers_products');
    }
};
