<nav>
    <ul>
        <li>
            <a class="{{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a>
            <a class="{{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>
            <a class="{{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a>
            <a class="{{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a>
        </li>
    </ul>
</nav>
