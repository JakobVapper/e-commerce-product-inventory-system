<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head> 

<body> 
    <h1 class="justify-items-center text-5xl font-semibold">Dashboard</h1> 
    <div> 
        <a class="w-[400px] h-[100px] text-center bg-emerald-400 hover:bg-emerald-200 text-white" href="{{ route('products.index') }}"> 
            Products 
        </a> 
        <a class="w-[400px] h-[100px] text-center bg-teal-400 hover:bg-teal-200 text-white" href="{{ route('categories.index') }}"> 
            Categories 
        </a> 
    </div> 
</body> 
</html>