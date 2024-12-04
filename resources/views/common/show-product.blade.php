<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Add Product') }}
        </x-sub-header>
    </x-slot>
    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg"> 
               <!-- Begins here -->

                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <!-- Back to Products Button -->
                    <div class="mb-6">
                        <a href="{{ route('product.index') }}" class="inline-block bg-gray-700 hover:bg-gray-800 text-white text-sm py-2 px-4 rounded">
                            &larr; Back to Products
                        </a>
                    </div>

                    <div class="bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden">
                        <div class="flex flex-col lg:flex-row">
                            <!-- Product Image -->
                            <div class="lg:w-1/2">
                                <img class="w-full h-96 object-cover" src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/600x400' }}" alt="{{ $product->name }}">
                            </div>
                            
                            <!-- Product Details -->
                            <div class="lg:w-1/2 p-6">
                                <!-- Product Title -->
                                <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
                                <!-- Description -->
                                <p class="text-gray-400 text-sm mb-6">{{ $product->description }}</p>

                                <!-- Price, Stock Status -->
                                <div class="flex items-center justify-between mb-6">
                                    <span class="text-2xl font-bold text-yellow-400">
                                        ${{ number_format($product->price, 2) }} 
                                        <small class="font-bold text-red-500"><del>{{ $product->rrp }}</del></small>
                                    </span>
                                    
                                    <span class="bg-red-500 text-xs font-semibold px-3 py-1 rounded-full">In Stock</span>
                                </div>

                                <!-- Advertiser, Date, Category, Discount -->
                                <div class="text-sm text-gray-300 space-y-2 mb-6">
                                    <p><span class="font-bold">Advertiser:</span> {{ ($product->user->firstname ." ". $product->user->lastname ) ?? 'Unknown' }}</p>
                                    <p><span class="font-bold">Date Posted:</span> {{ $product->created_at->diffForHumans() }}</p>
                                    <p><span class="font-bold">Category:</span> {{ $product->category ?? 'Uncategorized' }}</p>
                                </div>

                                <!-- Add to Cart Button -->
                                <form action="{{ route('product.index', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg text-lg">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information Section -->
                    <div class="bg-gray-900 text-gray-200 rounded-lg shadow-lg mt-8 p-6">
                        <h2 class="text-2xl font-semibold mb-4">Additional Information</h2>
                        <p>Please shop with caution!</p>
                    </div>
                </div>


            <!-- Ends here --> 
            </div>
        </div>
    </div>
</x-app-layout>
