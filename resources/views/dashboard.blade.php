<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head> 

<body> 
    <h1 class="justify-items-center text-5xl font-semibold">Dashboard</h1> 
    <div> 
        <div class="w-[400px] h-[400px] absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center">
            <div class="w-[180px] h-[60px] absolute">
                <button href="{{ route('categories.index') }}" class="w-[180px] h-[60px] cursor-pointer bg-transparent border border-[#91C9FF] outline-none transition-all ease-in-out duration-1000 hover:bg-[#4F95DA] relative">
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="absolute left-0 top-0 fill-none stroke-white stroke-dasharray-[150_480] stroke-dashoffset-[150] transition-all ease-in-out duration-1000 hover:stroke-dashoffset-[-480]">
                        <polyline points="179,1 179,59 1,59 1,1 179,1" />
                    </svg>
                    <span class="text-white text-[18px] font-light">Products</span>
                </button>
            </div>
        </div>
        <div class="w-[400px] h-[400px] absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center">
            <div class="w-[180px] h-[60px] absolute">
                <button href="{{ route('categories.index') }}" class="w-[180px] h-[60px] cursor-pointer bg-transparent border border-[#91C9FF] outline-none transition-all ease-in-out duration-1000 hover:bg-[#4F95DA] relative">
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="absolute left-0 top-0 fill-none stroke-white stroke-dasharray-[150_480] stroke-dashoffset-[150] transition-all ease-in-out duration-1000 hover:stroke-dashoffset-[-480]">
                        <polyline points="179,1 179,59 1,59 1,1 179,1" />
                    </svg>
                    <span class="text-white text-[18px] font-light">Categories</span>
                </button>
            </div>
        </div> 
    </div> 
</body> 
</html>

<!-- // href="{{ route('categories.index') }} -->
<!-- // href="{{ route('products.index') }} -->