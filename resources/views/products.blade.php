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
        <aside class="w-64 bg-white min-h-screen shadow-lg">
            <div class="p-6 border-b border-gray-200">
                <div class="h-24 w-full bg-gray-100 border border-dashed flex items-center justify-center text-gray-400">
                    Logo
                </div>
            </div>
            <nav class="mt-6 space-y-2 px-4">
                <a href="/admin" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">
                    <span class="mr-3">📊</span> DASHBOARD
                </a>
                <a href="#" class="flex items-center px-4 py-2 bg-[#003B4A] text-white rounded-md">
                    <span class="mr-3">👜</span> ALL PRODUCTS
                </a>
                <a href="/order-list" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">
                    <span class="mr-3">📝</span> ORDER LIST
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-[#EEF0EA]">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-6">
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
                            <h2 class="text-3xl font-bold my-3">Add Product</h2>
                            <hr>
                        </div>
                        <form action="">
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">Choose image</legend>
                                <input type="file"
                                    class="file-input bg-white file:bg-white file:text-black w-full" />
                                <legend class="fieldset-legend">Name</legend>
                                <input type="text" class="input bg-white w-full text-black"
                                    placeholder="Your Name here" />
                                <legend class="fieldset-legend">Description</legend>
                                <textarea class="textarea h-24 bg-white w-full text-black" placeholder="Your Description here"></textarea>
                                <legend class="fieldset-legend">Price</legend>
                                <input type="number" class="input bg-white w-full text-black"
                                    placeholder="Your Price here" />
                                <legend class="fieldset-legend">Stock</legend>
                                <input type="number" class="input bg-white w-full text-black" placeholder="stock" />
                            </fieldset>
                            <button class="btn btn-outline my-5" type="submit">Submit</button>
                        </form>
                    </div>
                </dialog>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Product Card -->
                <div class="bg-white rounded-lg shadow p-4 relative">
                    <div class="absolute top-3 right-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 w-full h-32 object-cover rounded">
                    <p class="text-sm text-gray-600">XXXX<br>XXXXXXX</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>

                <!-- Copy for multiple products -->
                <div class="bg-white rounded-lg shadow p-4 relative">
                    <div class="absolute top-3 right-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 w-full h-32 object-cover rounded">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="text-sm font-bold mt-1 text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 relative">
                    <div class="absolute top-3 right-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 w-full h-32 object-cover rounded">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="text-sm font-bold mt-1 text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 relative">
                    <div class="absolute top-3 right-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 w-full h-32 object-cover rounded">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="text-sm font-bold mt-1 text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 relative">
                    <div class="absolute top-3 right-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 w-full h-32 object-cover rounded">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="text-sm font-bold mt-1 text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>

                <div class="bg-white rounded-lg shadow p-4 relative">
                    <div class="absolute top-3 right-3 text-gray-500">⋮</div>
                    <img src="{{ asset('assets/dummy-products.jpg') }}" alt="Product"
                        class="mx-auto mb-3 w-full h-32 object-cover rounded">
                    <p class="font-medium text-black">Lorem Ipsum</p>
                    <p class="text-sm text-gray-500">Battery</p>
                    <p class="text-sm font-bold mt-1 text-black">₹110.40</p>
                    <p class="mt-2 font-medium text-black">NAME ITEM</p>
                    <p class="text-xs text-gray-500">XXXXXXXX</p>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
