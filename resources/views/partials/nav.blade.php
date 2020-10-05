<header x-data="{ open: false }" @click.away="open = false" @close.stop="open = false" class="absolute container bg-white sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
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
        @guest
            <a href="{{ route('login') }}" class="mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50 sm:mt-0 sm:ml-2">Login</a>
        @else
            <a href="#" class="mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50 sm:mt-0 sm:ml-2" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>
        @endguest
    </div>
</header>

<!-- Authentication -->
<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
    @csrf
</form>
