<header class="bg-white">
    <div class="flex items-center justify-between px-4 py-3 shadow-sm">
        <div>
            <a href="{{ route('home') }}" class="">
                {{ config('app.name') }}
            </a>
        </div>
        <div>
            <button wire:click="isOpen" type="button" class="block text-gray-500 hover:text-gray-900 focus:text-gray-900 focus:outline-none">
                <!-- Heroicon name: menu -->
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path class="{{ $isOpen ? 'block' : 'hidden' }}" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                    <path class="{{ !$isOpen ? 'block' : 'hidden' }}" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="{{ $isOpen ? 'block' : 'hidden' }} px-2 pt-2 pb-4 transition ease-in-out duration-150">
        <a href="{{ route('home') }}" class="{{ setActive('home') }} block px-2 py-1 font-semibold rounded hover:bg-gray-50">
            <span>@lang('Home')</span>
        </a>
        <a href="{{ route('about') }}" class="{{ setActive('about') }} mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50">
            <span>@lang('About')</span>
        </a>
        <a href="{{ route('projects.index') }}" class="{{ setActive('Projects') }} mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50">
            <span>@lang('Projects')</span>
        </a>
        <a href="{{ route('contact') }}" class="{{ setActive('Contact') }} mt-1 block px-2 py-1 font-semibold rounded hover:bg-gray-50">
            <span>@lang('Contact')</span>
        </a>
    </div>
</header>
