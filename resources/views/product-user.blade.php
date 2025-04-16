<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="font-poppins overflow-x-hidden">
    <div class="navbar fixed z-50 bg-[#2563EA] shadow-sm">
        <div class="navbar-start">
            <a class="ml-2 text-xl font-semibold" href="#">GRAND MORTAR</a>
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
            <a class="mr-2" href="">Hi, {{ Auth::user()->name }}</a>
        </div>
    </div>
    <div class="h-full bg-white">
        <div class="font-poppins flex h-[35%] w-full items-center pb-20 pl-10 pt-32 text-black">
            <h1 class="text-8xl font-bold text-[#2563EA]">This is our product</h1>
        </div>
        <div>
            <div class="container mx-auto grid grid-cols-3 place-items-center gap-y-5 pb-5">
                @foreach ($products as $product)
                    <div class="card bg-base-100 w-96 shadow-sm">
                        <figure
                            class="flex h-48 w-full items-center justify-center overflow-hidden rounded-t-lg bg-gray-100">
                            <img src="{{ asset('storage/' . $product->image) }}" class="h-full object-cover" />
                        </figure>

                        <div class="card-body">
                            <h2 class="card-title">{{ $product->name }}</h2>
                            <p class="text-green-400">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            <p>{{ $product->description }}</p>

                            <div class="card-actions flex items-center justify-between">

                                <!-- Quantity selector -->
                                <div class="flex items-center gap-2">
                                    <form action="{{ route('order.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="status" value="pending">
                                        <button type="button" onclick="decreaseQty(this)"
                                            class="btn btn-sm btn-outline">-</button>
                                        <input type="number"
                                            class="input input-bordered input-sm qty-input w-14 text-center"
                                            value="0" min="0" name="quantity">
                                        <button type="button" onclick="increaseQty(this)"
                                            class="btn btn-sm btn-outline">+</button>
                                </div>
                                <button class="btn btn-primary" type="submit">Buy Now</button>
                                </form>
                            </div>


                        </div>
                    </div>
                @endforeach
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
