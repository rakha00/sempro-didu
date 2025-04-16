<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="font-poppins overflow-x-hidden">
    <div class="navbar bg-[#2563EA] shadow-sm fixed z-50">
        <div class="navbar-start">
            <a class="text-xl font-semibold ml-2" href="#">GRAND MORTAR</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/home">Home</a></li>
                <li>
                    <a href="/about">About Us</a>
                </li>
                <li><a href="/product-user" class="bg-white/30">Our Product</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="mr-2" href="">Hi, Fauzan</a>
        </div>
    </div>
    <div class="bg-white">
        <div class="font-poppins text-black pt-32 pb-20 h-[35%] w-full flex items-center pl-10">
            <h1 class="text-8xl font-bold text-[#2563EA]">This is our product</h1>
        </div>
        <div>
            <div class="grid grid-cols-3 place-items-center gap-y-5 pb-5 container mx-auto">
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure
                        class="h-48 w-full flex items-center justify-center overflow-hidden bg-gray-100 rounded-t-lg">
                        <img src="{{ asset('assets/logo.jpg') }}" class="object-cover h-full" />
                    </figure>

                    <div class="card-body">
                        <h2 class="card-title">Card Title</h2>
                        <p class="text-green-400">Rp15.000
                        </p>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts
                        </p>

                        <div class="card-actions flex justify-between items-center">
                            <!-- Quantity selector -->
                            <div class="flex items-center gap-2">
                                <button onclick="decreaseQty(this)" class="btn btn-sm btn-outline">-</button>
                                <input type="number" class="input input-bordered input-sm w-14 text-center qty-input"
                                    value="0" min="0">
                                <button onclick="increaseQty(this)" class="btn btn-sm btn-outline">+</button>
                            </div>
                            <button class="btn btn-primary">Buy Now</button>
                        </div>


                    </div>
                </div>
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure
                        class="h-48 w-full flex items-center justify-center overflow-hidden bg-gray-100 rounded-t-lg">
                        <img src="{{ asset('assets/dummy-products.jpg') }}" class="object-cover h-full" />
                    </figure>

                    <div class="card-body">
                        <h2 class="card-title">Card Title</h2>
                        <p class="text-green-400">Rp15.000
                        </p>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts
                        </p>

                        <div class="card-actions flex justify-between items-center">
                            <!-- Quantity selector -->
                            <div class="flex items-center gap-2">
                                <button onclick="decreaseQty(this)" class="btn btn-sm btn-outline">-</button>
                                <input type="number" class="input input-bordered input-sm w-14 text-center qty-input"
                                    value="0" min="0">
                                <button onclick="increaseQty(this)" class="btn btn-sm btn-outline">+</button>
                            </div>
                            <button class="btn btn-primary">Buy Now</button>
                        </div>


                    </div>
                </div>
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure
                        class="h-48 w-full flex items-center justify-center overflow-hidden bg-gray-100 rounded-t-lg">
                        <img src="{{ asset('assets/1.jpg') }}" class="object-cover h-full" />
                    </figure>

                    <div class="card-body">
                        <h2 class="card-title">Card Title</h2>
                        <p class="text-green-400">Rp15.000
                        </p>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts
                        </p>

                        <div class="card-actions flex justify-between items-center">
                            <!-- Quantity selector -->
                            <div class="flex items-center gap-2">
                                <button onclick="decreaseQty(this)" class="btn btn-sm btn-outline">-</button>
                                <input type="number" class="input input-bordered input-sm w-14 text-center qty-input"
                                    value="0" min="0">
                                <button onclick="increaseQty(this)" class="btn btn-sm btn-outline">+</button>
                            </div>
                            <button class="btn btn-primary">Buy Now</button>
                        </div>


                    </div>
                </div>
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure
                        class="h-48 w-full flex items-center justify-center overflow-hidden bg-gray-100 rounded-t-lg">
                        <img src="{{ asset('assets/2.jpg') }}" class="object-cover h-full" />
                    </figure>

                    <div class="card-body">
                        <h2 class="card-title">Card Title</h2>
                        <p class="text-green-400">Rp15.000
                        </p>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts
                        </p>

                        <div class="card-actions flex justify-between items-center">
                            <!-- Quantity selector -->
                            <div class="flex items-center gap-2">
                                <button onclick="decreaseQty(this)" class="btn btn-sm btn-outline">-</button>
                                <input type="number" class="input input-bordered input-sm w-14 text-center qty-input"
                                    value="0" min="0">
                                <button onclick="increaseQty(this)" class="btn btn-sm btn-outline">+</button>
                            </div>
                            <button class="btn btn-primary">Buy Now</button>
                        </div>


                    </div>
                </div>
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure
                        class="h-48 w-full flex items-center justify-center overflow-hidden bg-gray-100 rounded-t-lg">
                        <img src="{{ asset('assets/3.webp') }}" class="object-cover h-full" />
                    </figure>

                    <div class="card-body">
                        <h2 class="card-title">Card Title</h2>
                        <p class="text-green-400">Rp15.000
                        </p>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts
                        </p>

                        <div class="card-actions flex justify-between items-center">
                            <!-- Quantity selector -->
                            <div class="flex items-center gap-2">
                                <button onclick="decreaseQty(this)" class="btn btn-sm btn-outline">-</button>
                                <input type="number" class="input input-bordered input-sm w-14 text-center qty-input"
                                    value="0" min="0">
                                <button onclick="increaseQty(this)" class="btn btn-sm btn-outline">+</button>
                            </div>
                            <button class="btn btn-primary">Buy Now</button>
                        </div>


                    </div>
                </div>
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure
                        class="h-48 w-full flex items-center justify-center overflow-hidden bg-gray-100 rounded-t-lg">
                        <img src="{{ asset('assets/3.webp') }}" class="object-cover h-full" />
                    </figure>

                    <div class="card-body">
                        <h2 class="card-title">Card Title</h2>
                        <p class="text-green-400">Rp15.000
                        </p>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts
                        </p>

                        <div class="card-actions flex justify-between items-center">
                            <!-- Quantity selector -->
                            <div class="flex items-center gap-2">
                                <button onclick="decreaseQty(this)" class="btn btn-sm btn-outline">-</button>
                                <input type="number" class="input input-bordered input-sm w-14 text-center qty-input"
                                    value="0" min="0">
                                <button onclick="increaseQty(this)" class="btn btn-sm btn-outline">+</button>
                            </div>
                            <button class="btn btn-primary">Buy Now</button>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>

    <footer class="footer sm:footer-horizontal footer-center text-base-content bg-[#2563EA] p-4">
        <aside>
            <p>Copyright ©2025 - All right reserved by GRAND MORTAR</p>
        </aside>
    </footer>

</body>

<script>
    function increaseQty(el) {
        const input = el.parentElement.querySelector('.qty-input');
        input.value = parseInt(input.value) + 1;
    }

    function decreaseQty(el) {
        const input = el.parentElement.querySelector('.qty-input');
        if (parseInt(input.value) > 0) {
            input.value = parseInt(input.value) - 1;
        }
    }
</script>


</html>
