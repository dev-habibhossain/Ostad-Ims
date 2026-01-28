<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-900 text-slate-300 shrink-0 hidden md:flex flex-col">
            <div class="p-6 text-white text-2xl font-bold border-b border-slate-800">
                <span class="text-indigo-400">IMS</span>Pro
            </div>
            
            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="/" class="flex items-center px-4 py-3 rounded-lg bg-indigo-600 text-white group">
                    <i class="fa-solid fa-gauge w-5 mr-3"></i> Dashboard
                </a>
                <a href="/product-inventory" class="flex items-center px-4 py-3 rounded-lg hover:bg-slate-800 hover:text-white transition group">
                    <i class="fa-solid fa-box w-5 mr-3"></i> Inventory
                </a>
                <a href="/pos-terminal" class="flex items-center px-4 py-3 rounded-lg hover:bg-slate-800 hover:text-white transition group">
                    <i class="fa-solid fa-cart-shopping w-5 mr-3"></i> POS Terminal
                </a>
                <a href="/customers" class="flex items-center px-4 py-3 rounded-lg hover:bg-slate-800 hover:text-white transition group">
                    <i class="fa-solid fa-users w-5 mr-3"></i> Customers
                </a>
            </nav>

            <div class="p-4 bg-slate-950 border-t border-slate-800">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white text-xs">A</div>
                    <div class="ml-3">
                        <p class="text-xs font-semibold text-white">Admin User</p>
                        <p class="text-[10px]">v1.0.4-stable</p>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            
            <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-8">
                <div class="flex items-center text-gray-500">
                    <button class="md:hidden mr-4"><i class="fa-solid fa-bars"></i></button>
                    <span class="font-medium text-gray-800">System Overview</span>
                </div>
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <i class="fa-solid fa-bell text-gray-400"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 w-2 h-2 rounded-full border-2 border-white"></span>
                    </div>
                    <button class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">Logout</button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8 bg-gray-50">
                @yield('content')
            </main>

            <footer class="bg-white border-t border-gray-200 py-3 px-8 text-sm text-gray-500 flex justify-between">
                <p>&copy; 2026 IMS Inventory System</p>
                <div class="space-x-4">
                    <a href="#" class="hover:underline">Help</a>
                    <a href="#" class="hover:underline">Support</a>
                </div>
            </footer>
        </div>
    </div>

</body>
</html>