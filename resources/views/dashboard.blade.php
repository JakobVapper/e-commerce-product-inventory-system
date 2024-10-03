<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head> 

<body> 
    <h1>Dashboard</h1> 
    <div> 
        <a href="{{ route('products.index') }}"> 
            <button>Go to Products</button> 
        </a> 
        <a href="{{ route('categories.index') }}"> 
            <button>Go to Categories</button> 
        </a> 
    </div> 
</body> 
</html>