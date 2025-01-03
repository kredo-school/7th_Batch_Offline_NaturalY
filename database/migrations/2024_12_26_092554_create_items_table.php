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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category')->nullable();
            $table->decimal('price', 6, 2);
            $table->string('contents', 20);
            $table->enum('delivery_date', ['short', 'middle', 'long']);
            $table->string('picture_1')->nullable();
            $table->string('picture_2')->nullable();
            $table->string('picture_3')->nullable();
            $table->string('description', 1000)->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
