<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>

<body class="font-poppins">
    <div class="navbar bg-[#2563EA] shadow-sm fixed">
        <div class="navbar-start">
            <a class="text-xl font-semibold ml-2" href="#">GRAND MORTAR</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/home">Home</a></li>
                <li>
                    <a href="/about">About Us</a>
                </li>
                <li><a href="/product-user">Our Product</a></li>
                <li><a href="/contact" class="bg-white/30">Contact Us</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="mr-2" href="">Hi, Fauzan</a>
        </div>
    </div>
    <div class="hero min-h-screen" style="background-image: url('{{ asset('assets/bg-contact.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center flex flex-col">
            <h1 class="text-4xl text-white">Got a project in mind and need the right materials to
                make it happen? Our team is ready to assist you with the best cement solutions and dependable
                service. Click below and let’s start building something great together.</h1>
            <a class="btn btn-outline btn-success my-7 hover:text-white" href="">
                <i class="fab fa-whatsapp text-xl"></i>
                Contact us here</a>
        </div>
    </div>
    <footer class="footer sm:footer-horizontal footer-center text-base-content bg-[#2563EA] p-4">
        <aside>
            <p>Copyright ©2025 - All right reserved by GRAND MORTAR</p>
        </aside>
    </footer>
</body>

</html>
