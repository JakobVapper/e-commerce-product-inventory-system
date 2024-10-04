<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['name'];

    /**
     * Get the products for the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        // Define a one-to-many relationship with the Product model
        return $this->hasMany(Product::class);
    }
}