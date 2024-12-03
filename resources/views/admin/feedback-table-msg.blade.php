<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">

        <div class="mt-6">
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full text-sm text-gray-800">
                    <thead class="bg-gray-100 border-b">
                        <tr>
                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">Name</th>
                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">Email</th>
                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">Phone</th>
                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">Message</th>
                            <th class="px-6 py-3 text-left font-bold tracking-wider uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse ($feedbacks as $feedback)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a class="font-semibold text-blue-500 hover:text-blue-700" href="{{ route('guest-message.edit', ['feedback' => $feedback->id]) }}">
                                        {{ $feedback->name }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $feedback->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $feedback->phone }}</td>
                                <td class="px-6 py-4">
                                    <p class="line-clamp-2 text-gray-700">
                                        {{ Str::limit($feedback->message, 100) }}
                                    </p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('guest-message.destroy', ['feedback' => $feedback->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button type="submit" onclick="return confirm('Are you sure you want to permanently delete this job record?');">
                                            {{ __('Delete') }}
                                        </x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                    Apparently, nobody has sent any feedback. Please check back later.
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
    </div>
</div>