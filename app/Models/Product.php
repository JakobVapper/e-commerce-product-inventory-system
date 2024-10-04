<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = [
        'name', // Product name
        'description', // Product description
        'price', // Product price
        'stock', // Current stock level
        'min_stock', // Minimum stock level before restocking is needed
        'category_id' // Foreign key to the Category model
    ];

    /**
     * Get the category that owns the product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        // Define an inverse one-to-many relationship with the Category model
        return $this->belongsTo(Category::class);
    }
}