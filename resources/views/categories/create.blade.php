<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Create Product</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <label>Description:</label>
        <input type="text" name="description" value="{{ old('description') }}">
        <label>Price:</label>
        <input type="text" name="price" value="{{ old('price') }}">
        <label>Category:</label>
        <select name="category_id">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <label>Stock:</label>
        <input type="text" name="stock" value="{{ old('stock') }}">
        <label>Min Stock:</label>
        <input type="text" name="min_stock" value="{{ old('min_stock') }}">
        <button type="submit">Create</button>
    </form>
</body>
</html>