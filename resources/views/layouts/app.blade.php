<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <!-- Navigation Bar -->
        @livewire('navigation-menu')

        <div class="flex antialiased min-h-screen bg-gray-100">
            <!-- Sidebar -->
            <div class="w-64 px-3 pt-4 pb-3 bg-white hidden sm:flex flex-col items-start">
                <div class="w-56 px-3 py-2 flex">
                    <div class="justify-start items-center gap-2 inline-flex">
                        <div class="w-8 h-7 relative">
                            <x-genealogy-icon />
                        </div>
                        <div class="text-gray-800 text-xl font-semibold font-inter leading-loose">Genealogy</div>
                    </div>
                </div>

                {{-- <div class="pb-6 flex-col justify-start items-start gap-4">
                    <div class="px-2 flex items-center">
                        <div class="grow shrink basis-0 h-6 justify-start items-center gap-3 flex">
                            <div class="w-4 h-4 relative">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_754_7862)">
                                        <path
                                            d="M12.6316 8.42105H7.57895V3.36842C7.57895 3.14508 7.49023 2.93089 7.3323 2.77296C7.17438 2.61504 6.96018 2.52632 6.73684 2.52632C5.40442 2.52632 4.10192 2.92142 2.99406 3.66168C1.88619 4.40193 1.02271 5.45408 0.512814 6.68508C0.00291895 7.91608 -0.130493 9.27063 0.12945 10.5774C0.389392 11.8843 1.03101 13.0847 1.97318 14.0268C2.91534 14.969 4.11573 15.6106 5.42255 15.8706C6.72937 16.1305 8.08392 15.9971 9.31492 15.4872C10.5459 14.9773 11.5981 14.1138 12.3383 13.0059C13.0786 11.8981 13.4737 10.5956 13.4737 9.26316C13.4737 9.03982 13.385 8.82562 13.227 8.6677C13.0691 8.50977 12.8549 8.42105 12.6316 8.42105Z"
                                            fill="#9CA3AF" />
                                        <path
                                            d="M9.26316 0C9.03982 0 8.82563 0.0887215 8.6677 0.246647C8.50978 0.404572 8.42105 0.618765 8.42105 0.842105V6.73684C8.42105 6.96018 8.50978 7.17437 8.6677 7.3323C8.82563 7.49022 9.03982 7.57895 9.26316 7.57895H15.1579C15.3812 7.57895 15.5954 7.49022 15.7534 7.3323C15.9113 7.17437 16 6.96018 16 6.73684C15.998 4.95074 15.2876 3.23836 14.0246 1.97539C12.7616 0.712422 11.0493 0.00200599 9.26316 0Z"
                                            fill="#9CA3AF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_754_7862">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text-gray-900 text-base font-medium font-inter leading-normal">Dashboard</div>
                        </div>
                    </div>
                </div> --}}
            </div>
            
            <!-- Content -->
            <div class="flex-1 p-8">
                <!-- Page Content -->
                <main class="flex-1">
                    {{ $slot}}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>

<!-- Page Heading -->
{{-- @if (isset($header))
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
    </div>
</header>
@endif --}}
