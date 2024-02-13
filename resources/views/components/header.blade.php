@php
    $navHeaderLinks = [
        'home' => '#',
        'shop' => '#',
        'about us' => '#',
        'contact us' => '#',
    ];

    $headerIcons = [
        [
            'name' => 'favorite',
            'icon' => '<svg class="w-5 h-auto fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>',
            'showInfo' => true,
        ],

        [
            'name' => 'cart',
            'icon' => '<svg class="w-5 h-auto fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>',
            'showInfo' => true,
        ],

        [
            'name' => 'user',
            'icon' => '<svg class="w-5 h-auto fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>',
            'showInfo' => false,
        ],
    ];
@endphp

<header class="fixed z-50 w-screen py-2 text-base text-white lg:px-12 bg-gradient-to-b from-slate-950 to-gray-800">
    <nav class="container relative flex px-10 mx-auto md:px-0">
        <div class="flex items-center justify-between w-full lg:gap-28">
            <a href="" class="flex items-center py-4 space-x-2 font-extrabold rounded-full">
                <span>
                    <svg class="w-5 h-auto fill-white" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                    </svg>
                </span>
                <span class="uppercase">e.com</span>
            </a>
            <div class="items-center justify-between flex-1 hidden lg:flex">
                <nav>
                    <ul class="flex items-center justify-between gap-4">
                        @foreach ($navHeaderLinks as $name => $link)
                            <li :key="$name" class="hover:border-b-2 hover:border-solid hover:border-orange-600">
                                <a href={{ $link }} class="uppercase">{{ $name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                @livewire('pages.search-bar')
                <nav>
                    <ul class="flex items-center justify-between gap-8">
                        @foreach ($headerIcons as $header)
                            <li class="relative" :key="$header->name">
                                @if($header['name'] === 'user')
                                <div x-data="{dropdownOpen: false}" class="relative">
                                    <button
                                        @click="dropdownOpen=true"
                                        class=""
                                        aria-label="user info"
                                    >
                                        {!! $header['icon'] !!}
                                    </button>
                                    <div x-show="dropdownOpen" @click.away="dropdownOpen=false"
                                        x-transition:enter="ease-out duration-200" x-transition:enter-start="-translate-y-2"
                                        x-transition:enter-end="translate-y-0"
                                        class="absolute top-0 right-0 z-50 w-56 mt-12 shadow-lg before:right-0 before:w-4 before:h-4 before:bg-white before:transform before:rotate-45 before:absolute" x-cloak>
                                        <div
                                            class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                                            @if (auth()->user())
                                                <div class="px-2 py-1.5 text-sm font-semibold">
                                                    My Account
                                                </div>
                                                <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                                                <a href="#_"
                                                    class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <span>{{ auth()->user()->name }}</span>
                                                </a>
                                                <a href="#_"
                                                    class="relative flex cursor-default select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2">
                                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <span>Profile</span>
                                                </a>
                                            @else
                                                <div class="flex flex-col">
                                                <a href="{{ route('login') }}">Login</a>
                                                <a href="{{ route('register') }}">Register</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @else
                                <a href='/' . {{ $header['name'] }} class="uppercase">{!! $header['icon'] !!}</a>
                                @endif
                                @if ($header['showInfo'])
                                    <span
                                        class="absolute flex items-center justify-center w-4 h-4 p-2 text-sm text-white bg-orange-600 rounded-full -top-2 -right-2">0</span>
                                @endif

                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="flex lg:hidden" x-data="{
                slideOverOpen: false
            }">
                <button @click="slideOverOpen=true" aria-label="open slide over">
                    <svg class="w-5 h-auto fill-white" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                    </svg>
                </button>
                <template x-teleport="body">
                    <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
                        <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false"
                            class="fixed inset-0 bg-black bg-opacity-10"></div>
                        <div class="fixed inset-0 overflow-hidden">
                            <div class="absolute inset-0 overflow-hidden">
                                <div class="fixed inset-y-0 left-0 flex max-w-full">
                                    <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="-translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="-translate-x-0"
                                        x-transition:leave-end="-translate-x-full" class="w-screen max-w-md">
                                        <div
                                            class="flex flex-col h-full py-5 overflow-hidden bg-white border-r shadow-lg border-neutral-100/70">
                                            <div class="px-4 sm:px-5">
                                                <div class="flex items-start justify-between pb-1">
                                                    <h2 class="text-base font-semibold leading-6 text-gray-900"
                                                        id="slide-over-title"></h2>
                                                    <div class="flex items-center h-auto ml-3">
                                                        <button @click="slideOverOpen=false"
                                                            class="absolute z-30 border-none top-5 right-8">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-4 h-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative flex-1 px-4 mt-5 sm:px-5">
                                                <div class="absolute inset-0 px-4 sm:px-5">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </nav>
</header>
