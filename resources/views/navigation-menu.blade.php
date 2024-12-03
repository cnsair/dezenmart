<nav x-data="{ open: false }" class="sticky top-0 z-50 text-white dark:bg-gray-800 dark:border-gray-700 pb-16">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="#">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @if ( Auth::user()->isAdmin() )
                        <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link href="{{ route('guest-message.show') }}" :active="request()->routeIs('guest-message.show')">
                            {{ __('Feedbacks') }}
                        </x-nav-link>

                    @elseif  ( Auth::user()->isMember() )
                        <x-nav-link href="{{ route('member.dashboard') }}" :active="request()->routeIs('member.dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @endif
            
                    <x-nav-link href="{{ route('product.index') }}" :active="request()->routeIs('product.index')">
                            {{ __('Shop') }}
                    </x-nav-link>
            
                    <x-nav-link href="{{ route('product.create') }}" :active="request()->routeIs('product.create')">
                            {{ __('Add Product') }}
                    </x-nav-link>

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                @php
                                    $file = Auth::user()->profile_photo_path;
                                    $photo_path  = asset('storage/' . $file);
                                @endphp

                                @if ($file)
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ $photo_path }}" alt="{{ Auth::user()->firstname ." ". Auth::user()->lastname }}" />
                                    </button>
                                @else
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('assets/images/author/avatar.png') }}">
                                    </button>
                                @endif
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-100 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                    {{ Auth::user()->firstname ." ". Auth::user()->lastname }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Only Admin can use 2FA -->
                            @if ( Auth::user()->isAdmin() )
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 bg-gray-800 bg-opacity-30">
            <!-- Only Admin have access -->
            @if ( Auth::user()->isAdmin() )
                <x-responsive-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('guest-message.show') }}" :active="request()->routeIs('guest-message.show') || request()->routeIs('guest-message.show')">
                    {{ __('Feedbacks') }}
                </x-responsive-nav-link>

            <!-- Only Admin have access -->
            @elseif ( Auth::user()->isMember() )
                <x-responsive-nav-link href="{{ route('member.dashboard') }}" :active="request()->routeIs('member.dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @endif
            
            <!-- All authenticated have access -->
            <x-responsive-nav-link href="{{ route('product.index') }}" :active="request()->routeIs('product.index')">
                    {{ __('Shop') }}
            </x-responsive-nav-link>
    
            <x-responsive-nav-link href="{{ route('product.create') }}" :active="request()->routeIs('product.create')">
                    {{ __('Add Product') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    @php
                        $file = Auth::user()->profile_photo_path;
                        $photo_path  = asset('storage/' . $file);
                    @endphp
                    @if ($file)
                        <div class="shrink-0 me-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ $photo_path }}" alt="{{ Auth::user()->firstname ." ". Auth::user()->lastname }}" />
                        </div>
                    @else
                        <div class="shrink-0 me-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('assets/images/author/avatar.png') }}" alt="{{ Auth::user()->firstname }}" />
                        </div>
                    @endif
                @endif

                <div>
                    <div class="font-medium text-base text-gray-200">{{ Auth::user()->firstname ." ". Auth::user()->lastname }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Only Admin can use 2FA -->
                @if ( Auth::user()->isAdmin() )
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</nav>
