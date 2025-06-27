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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->string('product');
            $table->string('user_id');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->decimal('total', 12, 2);
            $table->string('status')->default('Pending');
            $table->timestamps(); // adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
