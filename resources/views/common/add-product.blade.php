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

                <div class="p-6 lg:p-8 border-b border-gray-400">
                    <div class="max-w-xl">
                        
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return addProductF(this);">
                            @csrf

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Product successfully added.') }}
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
                                        <option value="all">All Categories</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="fashion">Fashion</option>
                                        <option value="home-appliances">Home Appliances</option>
                                        <option value="beauty">Beauty</option>
                                        <option value="sports">Sports</option>
                                        <option value="books">Books</option>
                                        <option value="toys">Toys</option>
                                    </select>
                                </div>
                                <x-input-error for="category" class="mt-2" />
                            </div>
               
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-white">Name*</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" value="{{ old('name') }}" required>
                                <x-input-error for="name" class="mt-2" />
                            </div>

                            <div class="mb-4">
                                <label for="price" class="block text-sm font-medium text-white">Price*</label>
                                <input type="number" id="price" name="price" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" value="{{ old('price') }}" required>
                                @error('price') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="rrp" class="block text-sm font-medium text-white">Recommended Retail Price (RRP)</label>
                                <input type="number" id="rrp" name="rrp" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" value="{{ old('rrp') }}">
                                @error('rrp') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-white">Description*</label>
                                <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900" required>{{ old('description') }}</textarea>
                                @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-white">Product Image*</label>
                                <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-white bg-gray-900">
                                @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                            </div> 
                            
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ms-4" name="addProduct">
                                    {{ __('Add Product') }}
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
