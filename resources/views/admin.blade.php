<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 font-sans">

    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 bg-white min-h-screen shadow-lg">
            <div class="p-6 border-b border-gray-200">
                <div class="h-24 w-full bg-gray-100 border border-dashed flex items-center justify-center text-gray-400">
                    Logo
                </div>
            </div>
            <nav class="mt-6 space-y-2 px-4">
                <a href="#" class="flex items-center px-4 py-2 bg-[#003B4A] text-white rounded-md">
                    <span class="mr-3">📊</span> DASHBOARD
                </a>
                <a href="/products" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">
                    <span class="mr-3">📦</span> ALL PRODUCTS
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
                    <h1 class="text-xl font-semibold text-black">Dashboard</h1>
                    <p class="text-sm text-gray-600">Home &gt; Dashboard</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600">🔍</button>
                    <button class="text-gray-600">🔔</button>
                    <div class="dropdown dropdown-end dropdown-hover  relative">
                        <button tabindex="0"
                            class="bg-white px-3 py-1 rounded-md shadow text-sm font-medium text-black">ADMIN ⌄</button>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-32">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <!-- Total Orders -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center">
                        <div class="bg-[#003B4A] text-white p-2 rounded-full">🛒</div>
                        <button>⋮</button>
                    </div>
                    <div class="mt-4 text-gray-700">
                        <p class="text-sm">Total Orders</p>
                        <p class="text-2xl font-semibold">XXXX</p>
                        <p class="text-sm text-green-500">↑ XXXX</p>
                        <p class="text-xs">XXXX</p>
                    </div>
                </div>

                <!-- Active Orders -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center">
                        <div class="bg-[#003B4A] text-white p-2 rounded-full">🛍️</div>
                        <button>⋮</button>
                    </div>
                    <div class="mt-4 text-gray-700">
                        <p class="text-sm">Active Orders</p>
                        <p class="text-2xl font-semibold">XXXX</p>
                        <p class="text-sm text-green-500">↑ XXXX</p>
                        <p class="text-xs">XXXX</p>
                    </div>
                </div>

                <!-- Completed Orders -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center">
                        <div class="bg-[#003B4A] text-white p-2 rounded-full">✅</div>
                        <button>⋮</button>
                    </div>
                    <div class="mt-4 text-gray-700">
                        <p class="text-sm">Completed Orders</p>
                        <p class="text-2xl font-semibold">XXXXX</p>
                        <p class="text-sm text-green-500">↑ XXXXX</p>
                        <p class="text-xs">XXXXX</p>
                    </div>
                </div>

                <!-- Return Orders -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex justify-between items-center">
                        <div class="bg-[#003B4A] text-white p-2 rounded-full">↩️</div>
                        <button>⋮</button>
                    </div>
                    <div class="mt-4 text-gray-700">
                        <p class="text-sm">Return Orders</p>
                        <p class="text-2xl font-semibold">XXXXX</p>
                        <p class="text-sm text-green-500">↑ XXXX</p>
                        <p class="text-xs">XXXXX</p>
                    </div>
                </div>
            </div>

            <!-- Sales Graph -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-black">Sale Graph</h2>
                    <div class="space-x-2">
                        <button
                            class="px-3 py-1 bg-white border rounded-md text-sm hover:bg-gray-100 text-black">WEEKLY</button>
                        <button class="px-3 py-1 bg-[#003B4A] text-white rounded-md text-sm">MONTHLY</button>
                        <button
                            class="px-3 py-1 bg-white border rounded-md text-sm hover:bg-gray-100 text-black">YEARLY</button>
                    </div>
                </div>
                <div class="h-40 bg-gray-100 flex items-end">
                    <div class="w-full h-full relative">
                        <!-- Simulasi grafik -->
                        <div class="absolute bottom-0 left-1/6 w-1 h-6 bg-blue-300"></div>
                        <div class="absolute bottom-0 left-2/6 w-1 h-8 bg-blue-400"></div>
                        <div class="absolute bottom-0 left-3/6 w-1 h-4 bg-blue-200"></div>
                        <div class="absolute bottom-0 left-4/6 w-1 h-16 bg-blue-500"></div>
                        <div class="absolute bottom-0 left-5/6 w-1 h-32 bg-blue-600"></div>
                    </div>
                </div>
                <div class="flex justify-between mt-2 text-sm text-gray-500">
                    <span>JUL</span><span>AUG</span><span>SEP</span><span>OCT</span><span>NOV</span><span>DEC</span>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
