<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all products
        $products = Product::all();

        // Return the index view with the list of products
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Retrieve all categories
        $categories = Category::all();

        // Return the create view with the list of categories
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'min_stock' => 'required|integer',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        // Create a new product with the validated data
        Product::create($request->all());

        // Redirect to the products index with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        // Retrieve all categories
        $categories = Category::all();

        // Return the edit view with the specified product and list of categories
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'min_stock' => 'required|integer',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        // Update the product with the validated data
        $product->update($request->all());

        // Redirect to the products index with a success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        // Delete the specified product
        $product->delete();

        // Redirect to the products index with a success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}