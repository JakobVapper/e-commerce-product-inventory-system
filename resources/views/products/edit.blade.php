<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Edit Product</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}">
        <label>Description:</label>
        <input type="text" name="description" value="{{ $product->description }}">
        <label>Price:</label>
        <input type="text" name="price" value="{{ $product->price }}">
        <label>Category:</label>
        <select name="category_id">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <label>Stock:</label>
        <input type="text" name="stock" value="{{ $product->stock }}">
        <label>Min Stock:</label>
        <input type="text" name="min_stock" value="{{ $product->min_stock }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>