<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <!-- Include the compiled CSS file -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Categories</h1>
    
    <!-- Link to create a new category -->
    <a href="{{ route('categories.create') }}">Create Category</a>
    
    <!-- Display success message, if any -->
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    
    <!-- Table to display the list of categories -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        
        <!-- Loop through each category and display its details -->
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <!-- Link to edit the category -->
                    <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                    
                    <!-- Form to delete the category -->
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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