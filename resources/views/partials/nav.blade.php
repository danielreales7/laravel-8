<header x-data="{ open: false }" @click.away="open = false" @close.stop="open = false" class="bg-white sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0 shadow-sm">
        <div>
            <a href="{{ route('home') }}" class="">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="sm:hidden">
            <button @click="open = ! open" type="button" class="block text-gray-500 hover:text-gray-900 focus:text-gray-900 focus:outline-none">
                <!-- Heroicon name: menu -->
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path x-show="open" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                    <path x-show="!open" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>
        </div>
    </div>
    <div x-show="window.innerWidth >= 768 || open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="px-2 pt-2 pb-4 sm:flex sm:p-0"
         @click="open = false">
        <a href="{{ route('home') }}" class="{{ setActive('home') }} block px-2 py-1 font-semibold rounded hover:bg-gray-50">
            <span>@lang('Home')</span>
        </a>
        <a href="{{ route('about') }}" class="{{ setActive('about') }} mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50 sm:mt-0 sm:ml-2">
            <span class="">@lang('About')</span>
        </a>
        <a href="{{ route('projects.index') }}" class="{{ setActive('Projects') }} mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50 sm:mt-0 sm:ml-2">
            <span>@lang('Projects')</span>
        </a>
        <a href="{{ route('contact') }}" class="{{ setActive('Contact') }} mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50 sm:mt-0 sm:ml-2">
            <span>@lang('Contact')</span>
        </a>
    </div>
</header>

{{--<nav id="header" class="fixed w-full z-30 top-0">--}}

{{--    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">--}}

{{--        <div class="pl-4 flex items-center">--}}
{{--            <a href="{{ route('home') }}" class="text-black-50 inline-flex items-center text-2xl lg:text-4x">--}}
{{--                {{ config('app.name') }}--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="block lg:hidden pr-4">--}}
{{--            <button type="button" class="flex items-center p-1 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out nav-toggler" data-target="#navigation">--}}
{{--                <!-- Heroicon name: menu -->--}}
{{--                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}

{{--        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">--}}
{{--            <ul class="list-reset lg:flex justify-end flex-1 items-center">--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Active</a>--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>--}}
{{--                </li>--}}
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Action</button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />--}}
{{--</nav>--}}


{{--<style>--}}
{{--    @media (min-width: 1024px) {--}}
{{--        .top-navbar {--}}
{{--            display: inline-flex !important;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}
{{--<nav class="relative bg-red-600 sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3 items-center bg-white shadow-sm flex-wrap">--}}
{{--    <a href="{{ route('home') }}" class="p-2 mr-4 inline-flex items-center">--}}
{{--        {{ config('app.name') }}--}}
{{--    </a>--}}
{{--    <button type="button" class="absolute sm:hidden ml-auto inline-flex items-end justify-end p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out nav-toggler" data-target="#navigation">--}}
{{--        <!-- Heroicon name: menu -->--}}
{{--        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--        </svg>--}}
{{--    </button>--}}
{{--    <div class="hidden top-navbar lg:inline-flex lg:flex-grow lg:w-auto bg-red-600 justify-end" id="navigation">--}}
{{--        <div class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto lg:items-center items-start lg:h-auto bg-gray-50">--}}
{{--            <a href="{{ route('home') }}" class="{{ setActive('home') }} lg:inline-flex lg:w-auto w-full px-3 py-2 rounded items-center justify-center hover:text-white">--}}
{{--                <span>@lang('Home')</span>--}}
{{--            </a>--}}
{{--            <a href="{{ route('about') }}" class="{{ setActive('about') }} lg:inline-flex lg:w-auto w-full px-3 py-2 rounded items-center justify-center hover:text-white">--}}
{{--                <span>@lang('About')</span>--}}
{{--            </a>--}}
{{--            <a href="{{ route('projects.index') }}" class="{{ setActive('Projects') }} lg:inline-flex lg:w-auto w-full px-3 py-2 rounded items-center justify-center hover:text-white">--}}
{{--                <span>@lang('Projects')</span>--}}
{{--            </a>--}}
{{--            <a href="{{ route('contact') }}" class="{{ setActive('Contact') }} lg:inline-flex lg:w-auto w-full px-3 py-2 rounded items-center justify-center hover:text-white">--}}
{{--                <span>@lang('Contact')</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}



{{--<header class="bg-white shadow-sm sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3 relative">--}}
{{--    <div class="flex items-center justify-between px-4 py-3 sm:p-0">--}}
{{--        <div>--}}
{{--            <a class="h-8" href="{{ route('home') }}">--}}
{{--                {{ config('app.name') }}--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="-mr-2 -my-2 md:hidden">--}}
{{--        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--            <!-- Heroicon name: menu -->--}}
{{--            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <nav class="hidden md:flex space-x-10">--}}
{{--        <a class="{{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a>--}}
{{--        <a class="{{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>--}}
{{--        <a class="{{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a>--}}
{{--        <a class="{{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a>--}}
{{--        @guest--}}
{{--            <a href="{{ route('login') }}">Login</a>--}}
{{--        @else--}}
{{--            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>--}}
{{--        @endguest--}}
{{--    </nav>--}}
{{--    <!-- Authentication -->--}}
{{--    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">--}}
{{--        @csrf--}}
{{--    </form>--}}
{{--</header>--}}
