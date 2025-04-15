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
                <a href="/products" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">
                    <span class="mr-3">📝</span> ALL PRODUCT
                </a>
                <a href="#" class="flex items-center px-4 py-2 bg-[#003B4A] text-white rounded-md">
                    <span class="mr-3">👜</span> ORDER LIST
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

            </div>

            <div class="overflow-x-auto bg-white rounded-md text-black">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr class="text-black">
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox border-black" />
                                </label>
                            </th>
                            <th>Product</th>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox border-black" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div>
                                        <div class="">Hart Hagerty</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                                <br />
                            </td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>

                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox border-black" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div>
                                        <div class="">Hart Hagerty</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                                <br />
                            </td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>

                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox border-black" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div>
                                        <div class="">Hart Hagerty</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                                <br />
                            </td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>

                        </tr>
                        <!-- row 4 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox border-black" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div>
                                        <div class="">Hart Hagerty</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                                <br />
                            </td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>
                            <td>Purple</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>

</html>
