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
    <footer class="footer sm:footer-horizontal footer-center text-base-content bg-[#2563EA] p-4">
        <aside>
            <p>Copyright ©2025 - All right reserved by GRAND MORTAR</p>
        </aside>
    </footer>
</body>

</html>
