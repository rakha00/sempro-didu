<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
    <div class="navbar fixed z-50 bg-[#2563EA] shadow-sm">
        <div class="navbar-start">
            <a class="ml-2 text-xl font-semibold" href="#">GRAND MORTAR</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/home" class="bg-white/30">Home</a></li>
                <li>
                    <a href="/about">About Us</a>
                </li>
                <li><a href="/product-user">Our Product</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="mr-2" href="">Hi, {{ Auth::user()->name }}</a>
        </div>
    </div>
    <div class="hero min-h-screen bg-white">
        <div class="hero-content text-center">
            <div class="font-poppins text-black">
                <h1 class="text-8xl font-bold text-[#2563EA]">Hi, {{ Auth::user()->name }}</h1>
                <p class="py-6 text-3xl">
                    We are here to provide high-quality cement with fast and reliable service to support every
                    construction project you undertake.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-4xl font-bold text-[#2563EA]">Discover Our Products</h2>
                <p class="mx-auto max-w-3xl text-xl text-gray-700">
                    Explore our range of high-quality cement products designed to meet the needs of any construction
                    project, from small residential builds to large commercial developments.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition-shadow duration-300 hover:shadow-xl">
                    <div class="flex h-48 items-center justify-center bg-gray-200">
                        <img src="{{ asset('assets/images-dummy/semen-bital.webp') }}" alt="Portland Cement"
                            class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="mb-2 text-xl font-semibold">Portland Cement</h3>
                        <p class="mb-4 text-gray-600">Our versatile Portland cement is perfect for general construction
                            needs.</p>
                        <a href="/product-user" class="font-medium text-[#2563EA] hover:underline">Learn more →</a>
                    </div>
                </div>
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition-shadow duration-300 hover:shadow-xl">
                    <div class="flex h-48 items-center justify-center bg-gray-200">
                        <img src="{{ asset('assets/images-dummy/semen-dynamix.webp') }}" alt="Masonry Cement"
                            class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="mb-2 text-xl font-semibold">Masonry Cement</h3>
                        <p class="mb-4 text-gray-600">Specially formulated for brick and block work with superior
                            workability.</p>
                        <a href="/product-user" class="font-medium text-[#2563EA] hover:underline">Learn more →</a>
                    </div>
                </div>
                <div
                    class="overflow-hidden rounded-lg bg-white shadow-md transition-shadow duration-300 hover:shadow-xl">
                    <div class="flex h-48 items-center justify-center bg-gray-200">
                        <img src="{{ asset('assets/images-dummy/semen-portland-komposit.webp') }}"
                            alt="Ready-Mix Concrete" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="mb-2 text-xl font-semibold">Ready-Mix Concrete</h3>
                        <p class="mb-4 text-gray-600">Time-saving solution delivered directly to your construction site.
                        </p>
                        <a href="/product-user" class="font-medium text-[#2563EA] hover:underline">Learn more →</a>
                    </div>
                </div>
            </div>
            <div class="mt-10 text-center">
                <a href="/product-user"
                    class="inline-block rounded-md bg-[#2563EA] px-6 py-3 font-medium text-white transition-colors duration-300 hover:bg-blue-700">View
                    All Products</a>
            </div>
        </div>
    </div>

    <footer class="footer sm:footer-horizontal footer-center text-base-content bg-[#2563EA] p-4">
        <aside>
            <p>Copyright ©2025 - All right reserved by GRAND MORTAR</p>
        </aside>
    </footer>
</body>

</html>
