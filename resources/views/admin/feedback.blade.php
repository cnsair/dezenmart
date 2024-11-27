<x-app-layout>
    <x-slot name="header">
        <x-sub-header>
            {{ __('Feedback') }}
        </x-sub-header>
    </x-slot>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
               <!-- Begins here -->

                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">

                        <div class="mt-6">
                            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                                <table class="min-w-full text-sm text-gray-800">
                                    <thead class="bg-gray-100 border-b">
                                        <tr>
                                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">{{ $feedback->name }}</th>
                                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">{{ $feedback->email }}</th>
                                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">{{ $feedback->phone }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <tr>
                                            <td colspan="5" class="px-6 py-4">
                                                {{ $feedback->message }}
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                    
            <!-- Ends here --> 
            </div>
        </div>
    </div>
    
</x-app-layout>
