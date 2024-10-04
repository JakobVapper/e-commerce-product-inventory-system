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
        // Create the 'categories' table
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Category name
            $table->timestamps(); // Timestamps for created_at and updated_at
        });

        // Add 'category_id' foreign key to the 'products' table
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            // 'category_id' is a foreign key that references the 'id' column on the 'categories' table
            // It is nullable and will be set to null if the referenced category is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the foreign key and column from the 'products' table
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Drop the foreign key constraint
            $table->dropColumn('category_id'); // Drop the 'category_id' column
        });

        // Drop the 'categories' table
        Schema::dropIfExists('categories');
    }
};