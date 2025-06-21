<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="/" class="flex ms-2 md:me-24">
                    <svg width="42" class="mx-2" height="42" viewBox="0 0 491 323" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Definición del gradiente lineal -->
                        <defs>
                            <linearGradient id="blueGradient" x1="0%" y1="0%" x2="100%" y2="100%" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#3b82f6" stop-opacity="1"></stop>
                                <stop offset="50%" stop-color="#2563eb" stop-opacity="1"></stop>
                                <stop offset="100%" stop-color="#1e40af" stop-opacity="1"></stop>
                            </linearGradient>
                        </defs>
                        <rect y="32" width="55" height="313" rx="5" fill="url(#blueGradient)"></rect>
                        <path d="M225.699 185.046C227.546 186.978 227.546 190.022 225.699 191.954L81.6149 342.731C78.4994 345.991 73 343.786 73 339.276L73 37.7236C73 33.2142 78.4994 31.009 81.6148 34.2692L225.699 185.046Z" fill="url(#blueGradient)"></path>
                        <path d="M159.828 185.593C161.615 187.513 161.615 190.487 159.828 192.407L74.9096 283.621C71.8152 286.945 66.25 284.756 66.25 280.214L66.25 97.7855C66.25 93.2443 71.8152 91.0548 74.9096 94.3785L159.828 185.593Z" fill="#fff"></path>
                        <path d="M331.968 338.892C330.048 342.522 324.86 342.522 323.066 338.892L175.016 39.4241C173.371 36.0976 175.856 32.148 179.593 32.148L486.041 32.148C489.778 32.148 492.126 36.0976 490.366 39.4241L331.968 338.892Z" fill="url(#blueGradient)"></path>
                        <path d="M333.104 225.369C331.207 229.091 325.901 229.091 324.132 225.369L231.218 29.8272C229.639 26.5051 232.124 22.6197 235.828 22.6197L428.403 22.6197C432.106 22.6197 434.457 26.5051 432.764 29.8272L333.104 225.369Z" fill="#fff"></path>
                    </svg>
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap ">Dev Code</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

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
        </div>
    </div>
</nav>
