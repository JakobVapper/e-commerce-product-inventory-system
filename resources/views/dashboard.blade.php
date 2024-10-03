<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head> 
<body class="flex items-center justify-center min-h-screen bg-gray-100"> 
    <div class="text-center">
        <h1 class="text-5xl font-semibold mb-8">Dashboard</h1> 
        <div class="space-y-4">
            <a class="block w-64 h-24 text-center leading-[6rem] bg-emerald-400 hover:bg-emerald-200 text-white rounded-lg" href="{{ route('products.index') }}"> 
                Products 
            </a> 
            <a class="block w-64 h-24 text-center leading-[6rem] bg-teal-400 hover:bg-teal-200 text-white rounded-lg" href="{{ route('categories.index') }}"> 
                Categories 
            </a> 
        </div> 
    </div> 
</body> 
</html>