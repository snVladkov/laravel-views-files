<!-- картички за продукти -->
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
    <div>
        <div class="relative">
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover">
            <span class="absolute top-2 right-2 bg-slate-900 text-white text-xs px-2 py-1 rounded font-medium">
                Badge
            </span>
        </div>

        <div class="p-4">
            <span class="text-xs font-semibold text-blue-600 uppercase tracking-wide">Category</span>
            <h3 class="font-bold text-lg text-gray-800 mt-1">Name</h3>
            
            <p class="text-xs text-green-600 font-medium mt-1">In Stock</p>
        </div>
    </div>

    <div class="p-4 border-t border-gray-100 flex items-center justify-between">
        <span class="text-xl font-extrabold text-gray-900">$100.99</span>
        
        <button class="px-3 py-1.5 rounded-lg text-sm font-medium transition bg-blue-600 hover:bg-blue-700 text-white">
            Add to Cart
        </button>
    </div>
</div>

<!-- картички за категории -->
<div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition flex items-center space-x-4">
    <span class="text-4xl">Icon</span>
    <div>
        <h3 class="font-bold text-lg text-gray-800">Name</h3>
        <p class="text-sm text-gray-500">10</p>
    </div>
</div>
