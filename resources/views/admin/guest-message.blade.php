<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Feedbacks From Contact Us') }}
        </x-sub-header>
    </x-slot>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
               <!-- Begins here -->

                @include('admin.feedback-table-msg')
                    
            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
