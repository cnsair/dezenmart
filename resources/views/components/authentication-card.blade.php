<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 text-white dark:bg-gray-800 border-2 dark:border-gray-700 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
