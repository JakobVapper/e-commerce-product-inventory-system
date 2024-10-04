<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Create the 'products' table
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Product name
            $table->text('description')->nullable(); // Product description, nullable
            $table->decimal('price', 8, 2); // Product price with 8 digits in total and 2 decimal places
            $table->integer('stock'); // Current stock level
            $table->integer('min_stock'); // Minimum stock level before restocking is needed
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Drop the 'products' table
        Schema::dropIfExists('products');
    }
}