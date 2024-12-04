<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Edit Product') }}
        </x-sub-header>
    </x-slot>
    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg"> 
               <!-- Begins here -->

                <div class="p-6 lg:p-8 border-b border-gray-400">
                    <div class="max-w-xl">
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}" enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return addProductF(this);">
                            @csrf
                            @method('patch')

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Product successfully updated.') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Something went wrong! Please try again') }}
                                </x-failed-msg>
                            @endif

                            <small>Blocks with asterisks (*) are mandatory</small>

                            <div class="mb-4">
                                <label for="category" class="block text-sm font-medium text-white">Category*</label>
                                
                                <div class="relative mt-2">
                                    <select id="category" name="category" class="block w-full pl-3 pr-10 py-2 text-white bg-gray-900 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <option {{ (old('category', $product->category) == 'electronics') ? 'selected' : '' }} value="electronics">Electronics</option>
                                        <option {{ (old('category', $product->category) == 'fashion') ? 'selected' : '' }} value="fashion">Fashion</option>
                                        <option {{ (old('category', $product->category) == 'home-appliances') ? 'selected' : '' }} value="home-appliances">Home Appliances</option>
                                        <option {{ (old('category', $product->category) == 'beauty') ? 'selected' : '' }} value="beauty">Beauty</option>
                                        <option {{ (old('category', $product->category) == 'sports') ? 'selected' : '' }} value="sports">Sports</option>
                                        <option {{ (old('category', $product->category) == 'books') ? 'selected' : '' }} value="books">Books</option>
                                        <option {{ (old('category', $product->category) == 'toys') ? 'selected' : '' }} value="toys">Toys</option>
                                    </select>
                                </div>
                                <x-input-error for="category" class="mt-2" />
                            </div>
               
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-white">Name*</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" value="{{ old('name', $product->name) }}" required>
                                <x-input-error for="name" class="mt-2" />
                            </div>

                            <div class="mb-4">
                                <label for="price" class="block text-sm font-medium text-white">Price*</label>
                                <input type="number" id="price" name="price" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" value="{{ old('price', $product->price) }}" required>
                                <x-input-error for="price" class="mt-2" />
                            </div>

                            <div class="mb-4">
                                <label for="rrp" class="block text-sm font-medium text-white">Recommended Retail Price (RRP)</label>
                                <input type="number" id="rrp" name="rrp" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" value="{{ old('rrp', $product->rrp) }}">
                                <x-input-error for="rrp" class="mt-2" />
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-white">Description*</label>
                                <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" required>{{ old('description', $product->description) }}</textarea>
                                <x-input-error for="description" class="mt-2" />
                            </div>

                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-white">Product Image*</label>
                                <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900">
                                <x-input-error for="image" class="mt-2" />
                            </div> 
                            
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4" name="updateProduct">
                                    {{ __('Update Product') }}
                                </x-button>
                            </div>
                        </form>
                    
                    </div>
                </div>
            <!-- Ends here --> 
            </div>
        </div>
    </div>
</x-app-layout>
