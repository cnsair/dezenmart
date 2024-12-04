@props(['products'])

<section id="products" class="bg-gray-900 min-h-screen">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-center text-white mb-8">Featured Products</h2>
        <div class="space-y-4">

            <!-- Product Row with Adjusted Layout -->
            @forelse ( $products as $product )

                <div class="flex bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden relative">
                    <!-- Product Image -->
                    <div class="relative w-24 sm:w-32 flex-shrink-0">
                        @php
                            $image = $product->image;
                            $photo_path = $image ? asset('storage/' . $image) : asset('assets/images/logo/dezenmart-mark.png');
                        @endphp
                        <img class="product-img w-full object-cover" src="{{ $photo_path }}" alt="Product 1">
                        <!-- Sale Badge -->
                        <div class="absolute top-1 left-1 bg-red-500 text-xs text-white font-semibold px-2 py-1 rounded-full">
                            <del>{{ $product->rrp }}</del>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="p-3 flex-1">
                        <h3 class="text-lg sm:text-xl font-semibold text-blue-500 hover:text-blue-700">
                            <a href="{{ route('product.show', $product->id) }}">
                                {{ $product->name }}
                            </a>
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-400 mt-1">
                            {{ Str::limit($product->description, 50) }}
                        </p>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-base font-bold text-gray-200">
                                ${{ number_format($product->price, 2, '.', ',') }}
                            </span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-medium py-1 px-3 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Edit and Delete Icons -->
                    <div class="absolute top-2 right-2 flex space-x-2">

                        <!-- Allow authorized users to edit a job -->
                        @can('update', $product)
                            <a href="{{ route('product.edit', $product->id) }}" class="text-sm text-yellow-500 p-2 rounded-full">
                                <i class="fas fa-edit"></i>
                            </a>
                        @endcan

                        <!-- Allow authorized to delete a job -->
                        @can('delete', $product)
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-500 p-2 rounded-full">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        @endcan

                    </div>
                </div>
 
            @empty
                <p class="font-bold mt-5 ml-5 list-disc list-inside text-red-500">
                    Whoops.. No product to display now. Please check back later.
                </p>
            @endforelse

            @if($products->hasPages())
                <!-- Pagination Links -->
                <div class="mt-6">
                    {{ $products->links() }}
                </div>
            @endif

        </div>
    </div>
</section>

<!-- Sticky Bottom Nav with 4 Buttons -->
<!-- <nav class="fixed bottom-0 inset-x-0 bg-gray-800 p-3 shadow-lg flex justify-around sm:hidden">
    <a href="#" class="text-white text-center">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 6h18m-7 8v4m0 0v2m0-2h-2m4 0h2"></path>
        </svg>
        <span class="text-xs">Home</span>
    </a>
    <a href="#" class="text-white text-center">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4m8 8v-4m0 0H4m12 4v-4"></path>
        </svg>
        <span class="text-xs">Cart</span>
    </a>
    <a href="#" class="text-white text-center">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 20h9m-4-9H3m9 9V3m0 12h4"></path>
        </svg>
        <span class="text-xs">Profile</span>
    </a>
    <a href="#" class="text-white text-center">
        <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a4 4 0 10-8 0v2m-2 0a6 6 0 0112 0v2m-6 8h2"></path>
        </svg>
        <span class="text-xs">Wallet</span>
    </a>
</nav> -->