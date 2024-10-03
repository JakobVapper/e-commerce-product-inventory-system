<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head> 
<body class="flex justify-center bg-gray-100 min-h-screen pt-10"> 
    <div class="text-center"> 
        <h1 class="text-5xl font-semibold mb-8">Dashboard</h1> 
        <div class="space-y-4"> 
            <a class="w-10 text-center border-2 rounded-lg" href="{{ route('products.index') }}"> 
                Products 
            </a> 
            <a class="w-10 text-center border-2 rounded-lg" href="{{ route('categories.index') }}"> 
                Categories 
            </a> 
        </div> 
    </div> 
</body> 
</html>