<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Edit Category</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $category->name }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>