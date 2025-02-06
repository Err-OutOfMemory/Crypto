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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('crypto_id')->constrained('cryptocurrencies')->onDelete('cascade');
            $table->enum('type', ['buy', 'sell']);
            $table->decimal('amount', 16, 8);
            $table->enum('status', ['matched', 'pending', 'canceled'])->default('pending');
            $table->decimal('price', 16, 2)->default(0);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
