<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
               <!-- Begins here -->
                
               <div class="relative">
                    <x-products></x-products>  <!-- Include Product Section -->
                    <x-services></x-services> <!-- Include Services Section -->
                </div>

            <!-- Ends here --> 
            </div>
        </div>
    </div>
</x-app-layout>
