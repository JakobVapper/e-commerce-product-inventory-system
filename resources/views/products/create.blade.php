<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <!-- Include the compiled CSS file -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Create Product</h1>
    
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
    
    <!-- Form to create a new product -->
    <form action="{{ route('products.store') }}" method="POST">
        <!-- CSRF token for security -->
        @csrf
        
        <!-- Input for product name -->
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        
        <!-- Input for product description -->
        <label>Description:</label>
        <input type="text" name="description" value="{{ old('description') }}">
        
        <!-- Input for product price -->
        <label>Price:</label>
        <input type="text" name="price" value="{{ old('price') }}">
        
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
        <input type="text" name="stock" value="{{ old('stock') }}">
        
        <!-- Input for minimum stock level -->
        <label>Min Stock:</label>
        <input type="text" name="min_stock" value="{{ old('min_stock') }}">
        
        <!-- Submit button to create the product -->
        <button type="submit">Create</button>
    </form>
</body>
</html>