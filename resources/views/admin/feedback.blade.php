<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Feedback') }}
        </x-sub-header>
    </x-slot>
    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg font-semibold text-xl text-white dark:text-gray-200 leading-tight">
               <!-- Begins here -->

                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">

                        <div class="mt-6 overflow-x-auto">
                           
                            <div class="px-6 py-3 text-left text-sm font-bold uppercase flex-auto">{{ $feedback->name }}</div>
                            <div class="px-6 py-3 text-left text-sm font-bold uppercase flex-auto">{{ $feedback->email }}</div>
                            <div class="px-6 py-3 text-left text-sm font-bold uppercase flex-auto">{{ $feedback->phone }}</div>
                                
                        </div>
                        <hr/>
                        <div class="mt-4">
                            <div class="px-6 py-3 text-left flex-auto">{{ $feedback->message }}</div>
                        </div>
                    </div>
                </div>
                    
            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
