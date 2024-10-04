<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <!-- Include the compiled CSS file -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Edit Product</h1>
    
    <!-- Display validation errors, if any -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- Form to update an existing product -->
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        <!-- CSRF token for security -->
        @csrf
        <!-- Spoof the PUT method for the form -->
        @method('PUT')
        
        <!-- Input for product name -->
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}">
        
        <!-- Input for product description -->
        <label>Description:</label>
        <input type="text" name="description" value="{{ $product->description }}">
        
        <!-- Input for product price -->
        <label>Price:</label>
        <input type="text" name="price" value="{{ $product->price }}">
        
        <!-- Dropdown to select product category -->
        <label>Category:</label>
        <select name="category_id">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        
        <!-- Input for product stock -->
        <label>Stock:</label>
        <input type="text" name="stock" value="{{ $product->stock }}">
        
        <!-- Input for minimum stock level -->
        <label>Min Stock:</label>
        <input type="text" name="min_stock" value="{{ $product->min_stock }}">
        
        <!-- Submit button to update the product -->
        <button type="submit">Update</button>
    </form>
</body>
</html>