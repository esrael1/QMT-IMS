<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->constrained('categories')->onDelete('cascade'); // Cat_id: BIGINT, foreign key, not null
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User_id: BIGINT, foreign key, not null
            $table->string('unit');
            $table->string('name');
            $table->double('stock_quantity');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
