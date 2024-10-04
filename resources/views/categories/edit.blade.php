<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
    <!-- Include the compiled CSS file -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Edit Category</h1>
    
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
    
    <!-- Form to update an existing category -->
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        <!-- CSRF token for security -->
        @csrf
        <!-- Spoof the PUT method for the form -->
        @method('PUT')
        
        <!-- Input for category name -->
        <label>Name:</label>
        <input type="text" name="name" value="{{ $category->name }}">
        
        <!-- Submit button to update the category -->
        <button type="submit">Update</button>
    </form>
</body>
</html>