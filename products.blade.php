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
                <img src="{{ asset('images/logo.png') }}" alt="TechVolt Electronics Logo" class="h-10 w-auto object-contain">
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
        <div class="max-w-7xl mx-auto px-4 py-10">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Electronics Catalog</h1>
                    <p class="text-gray-500 text-sm mt-1">Browse our latest collection of technology.</p>
                </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1.5 rounded-full">
                    Showing All Items
                </span>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
               
            </div>
        </div>
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
