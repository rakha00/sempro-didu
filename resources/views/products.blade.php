<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Products</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="min-h-screen w-64 bg-white shadow-lg">
            <div class="border-b border-gray-200 p-6">
                <div class="flex h-24 w-full items-center justify-center border border-dashed bg-gray-100 text-gray-400">
                    Logo
                </div>
            </div>
            <nav class="mt-6 space-y-2 px-4">
                <a href="/admin" class="flex items-center rounded-md px-4 py-2 text-gray-700 hover:bg-gray-200">
                    <span class="mr-3">📊</span> DASHBOARD
                </a>
                <a href="#" class="flex items-center rounded-md bg-[#003B4A] px-4 py-2 text-white">
                    <span class="mr-3">👜</span> ALL PRODUCTS
                </a>
                <a href="/order-list" class="flex items-center rounded-md px-4 py-2 text-gray-700 hover:bg-gray-200">
                    <span class="mr-3">📝</span> ORDER LIST
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-[#EEF0EA] p-6">
            <!-- Top Bar -->
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-semibold text-black">All Products</h1>
                    <p class="text-sm text-gray-600">Home &gt; All Products</p>
                </div>
                <!-- You can open the modal using ID.showModal() method -->
                <button class="btn" onclick="my_modal_3.showModal()">➕ ADD NEW PRODUCT</button>
                <dialog id="my_modal_3" class="modal">
                    <div class="modal-box bg-[#003B4A]">
                        <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                        </form>
                        <div>
                            <h2 class="my-3 text-3xl font-bold">Add Product</h2>
                            <hr>
                        </div>
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">Choose image</legend>
                                <input type="file"
                                    class="file-input w-full bg-white text-black file:bg-white file:text-black"
                                    name="image" />
                                <legend class="fieldset-legend">Name</legend>
                                <input type="text" class="input w-full bg-white text-black"
                                    placeholder="Your Name here" name="name" />
                                <legend class="fieldset-legend">Description</legend>
                                <textarea class="textarea h-24 w-full bg-white text-black" placeholder="Your Description here" name="description"></textarea>
                                <legend class="fieldset-legend">Price</legend>
                                <input type="number" class="input w-full bg-white text-black"
                                    placeholder="Your Price here" name="price" />
                                <legend class="fieldset-legend">Stock</legend>
                                <input type="number" class="input w-full bg-white text-black" placeholder="stock"
                                    name="stock" />
                            </fieldset>
                            <button class="btn btn-outline my-5" type="submit">Submit</button>
                        </form>
                    </div>
                </dialog>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Product Card -->
                <div class="relative rounded-lg bg-white p-4 shadow">
                    <div class="absolute right-3 top-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 h-32 w-full rounded object-cover">
                    <p class="text-sm text-gray-600">XXXX<br>XXXXXXX</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>

                <!-- Copy for multiple products -->
                <div class="relative rounded-lg bg-white p-4 shadow">
                    <div class="absolute right-3 top-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 h-32 w-full rounded object-cover">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="mt-1 text-sm font-bold text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
                <div class="relative rounded-lg bg-white p-4 shadow">
                    <div class="absolute right-3 top-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 h-32 w-full rounded object-cover">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="mt-1 text-sm font-bold text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
                <div class="relative rounded-lg bg-white p-4 shadow">
                    <div class="absolute right-3 top-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 h-32 w-full rounded object-cover">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="mt-1 text-sm font-bold text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
                <div class="relative rounded-lg bg-white p-4 shadow">
                    <div class="absolute right-3 top-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 h-32 w-full rounded object-cover">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="mt-1 text-sm font-bold text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>

                <div class="relative rounded-lg bg-white p-4 shadow">
                    <div class="absolute right-3 top-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 h-32 w-full rounded object-cover">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="mt-1 text-sm font-bold text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
