<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Dashboard') }}
        </x-sub-header>
    </x-slot>
    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg"> 
               <!-- Begins here -->
                
               <div class="relative">
                    <!-- Include Product Section -->
                    <x-products :products="$products" />
                    
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
</x-app-layout>
