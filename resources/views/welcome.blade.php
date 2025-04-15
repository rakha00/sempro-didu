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
        <div class="navbar-end">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        @if (Auth::user()->role === 'admin')
                            <a href="{{ route('admin') }}"
                                class="rounded-xs inline-block border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('dashboard') }}"
                                class="rounded-xs inline-block border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:hover:border-[#62605b]">
                                Home
                            </a>
                        @endif
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block rounded-2xl border border-transparent bg-white px-5 py-1.5 text-sm leading-normal text-black hover:border-[#19140035] dark:hover:border-[#3E3E3A]">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-block rounded-2xl border border-white px-5 py-1.5 text-sm leading-normal text-white hover:border-[#1915014a]">
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
            <div class="font-poppins text-black">
                <h1 class="text-8xl font-bold text-[#2563EA]">GRAND MORTAR</h1>
                <p class="py-6 text-3xl">
                    Kami percaya bahwa fondasi yang kuat dimulai dari pilihan material yang tepat — dan kami siap jadi
                    mitra andalan Anda.
                </p>
                <button class="btn btn-primary">Get Stared</button>
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
