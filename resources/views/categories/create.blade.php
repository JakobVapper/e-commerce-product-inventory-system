<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
    <!-- Include the compiled CSS file -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Create Category</h1>
    
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
    
    <!-- Form to create a new category -->
    <form action="{{ route('categories.store') }}" method="POST">
        <!-- CSRF token for security -->
        @csrf
        
        <!-- Input for category name -->
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        
        <!-- Submit button to create the category -->
        <button type="submit">Create</button>
    </form>
</body>
</html>