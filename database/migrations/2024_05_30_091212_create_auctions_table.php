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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index();
            $table->unsignedBigInteger('winner_id')->nullable()->index();
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->decimal('buyout_price', 8, 2)->nullable();
            $table->decimal('starting_price', 8, 2)->nullable();
            $table->timestamps();
        
            $table->foreign('product_id')->references('id')->on('products');  
            $table->foreign('winner_id')->references('id')->on('users');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auction');
    }
};
