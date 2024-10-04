<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <!-- Include the compiled CSS file -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Products</h1>
    
    <!-- Link to create a new product -->
    <a href="{{ route('products.create') }}">Create Product</a>
    
    <!-- Display success message, if any -->
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    
    <!-- Table to display the list of products -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Min Stock</th>
            <th>Notification</th>
            <th>Actions</th>
        </tr>
        
        <!-- Loop through each product and display its details -->
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->min_stock }}</td>
                <td>
                    <!-- Display low stock notification if stock is less than or equal to min stock -->
                    @if ($product->stock <= $product->min_stock)
                        Low stock
                    @endif
                </td>
                <td>
                    <!-- Link to edit the product -->
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    
                    <!-- Form to delete the product -->
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>