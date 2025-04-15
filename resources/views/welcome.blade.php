<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
    <div class="navbar bg-[#2563EA] shadow-sm">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">daisyUI</a>
        </div>
        <div class="navbar-end ">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-xs text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 rounded-2xl bg-white text-black border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] text-sm leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 border-white hover:border-[#1915014a] border text-white rounded-2xl text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
    <div class="hero min-h-screen bg-white">
        <div class="hero-content text-center">
            <div class="text-black font-poppins">
                <h1 class="text-8xl font-bold text-[#2563EA]">GRAND MORTAR</h1>
                <p class="py-6 text-3xl">
                    Kami percaya bahwa fondasi yang kuat dimulai dari pilihan material yang tepat — dan kami siap jadi
                    mitra andalan Anda.
                </p>
                <button class="btn btn-primary">Get Stared</button>
            </div>
        </div>
    </div>
    <footer class="footer sm:footer-horizontal footer-center bg-[#2563EA]  text-base-content p-4">
        <aside>
            <p>Copyright ©2025 - All right reserved by GRAND MORTAR</p>
        </aside>
    </footer>
</body>

</html>
