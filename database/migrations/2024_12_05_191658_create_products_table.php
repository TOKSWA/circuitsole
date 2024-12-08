<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('short_description')-> nullable();
            $table->string('description');
            $table->decimal('price');
            $table->enum('stock_status',['instock','outofstock']);
            $table->unsignedInteger('quantity')->default(10);
            $table->string('image') -> nullable();
            $table->text('images') -> nullable();
            $table->boolean('featured')-> default(false);
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
