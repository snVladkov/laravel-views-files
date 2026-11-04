<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVolt Electronics</title>
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Navigation Header -->
    <header class="bg-slate-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3">
                <img src="#" alt="TechVolt Electronics Logo" class="h-10 w-auto object-contain">
            </a>
            
            <nav class="flex space-x-6">
                <a href="#" class="hover:text-blue-400 font-medium transition text-blue-400 underline underline-offset-4">
                   Home
                </a>
                <a href="#" class="hover:text-blue-400 font-medium transition">
                   Products
                </a>
                <a href="#" class="hover:text-blue-400 font-medium transition">
                   Contacts
                </a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium text-sm transition">
                    Cart (0)
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <section class="bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
                    Next-Gen Tech, <span class="text-blue-400">Unbeatable Prices</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-8">
                    Upgrade your setup with top-tier laptops, wireless audio, smart home devices, and custom PC hardware.
                </p>
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-8 py-3 rounded-lg shadow-lg transition">
                    Shop Catalog
                </a>
            </div>
        </section>

        <!-- Featured Categories -->
        <section class="max-w-7xl mx-auto px-4 py-12">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Featured Categories</h2>
            <p class="text-gray-500">Check back soon for our featured categories!</p>
            <!-- categories here -->
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-gray-400 py-8 border-t border-slate-800 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center space-y-3">
            <p class="text-lg font-semibold text-white">TechVolt Electronics</p>
            <p class="text-sm">Providing next-gen gadgets and components since 2026.</p>
            <p class="text-xs text-gray-500">&copy; {{ date('Y') }} TechVolt Inc. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
