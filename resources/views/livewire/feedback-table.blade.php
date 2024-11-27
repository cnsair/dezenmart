<div>
    <!-- Search Input -->
    <div class="mb-4">
        <input 
            type="text" 
            wire:model.debounce.300ms="search" 
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"
            placeholder="Search feedback..."
        />
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-sm text-gray-800">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-6 py-3 text-left font-bold uppercase">Name</th>
                    <th class="px-6 py-3 text-left font-bold uppercase">Email</th>
                    <th class="px-6 py-3 text-left font-bold uppercase">Phone</th>
                    <th class="px-6 py-3 text-left font-bold uppercase">Message</th>
                    <th class="px-6 py-3 text-left font-bold uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($feedbacks as $feedback)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $feedback->name }}</td>
                        <td class="px-6 py-4">{{ $feedback->email }}</td>
                        <td class="px-6 py-4">{{ $feedback->phone }}</td>
                        <td class="px-6 py-4 line-clamp-2">{{ $feedback->message }}</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline ml-3">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                            No feedback found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $feedbacks->links() }}
    </div>
</div>
