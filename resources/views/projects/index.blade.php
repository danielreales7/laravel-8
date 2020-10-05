@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <main>
            <div class="py-15">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-between tems-center">
                    <h1 class="text-4xl">@lang('Projects')</h1>
                    @auth
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2"
                           href="{{ route('projects.create') }}"
                        >Crear proyecto</a>
                    @endauth
                </div>
            </div>
            <div class="container bg-red-200 mx-auto py-2 px-8">
                <p class="font-thin">Proyectos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="list-group">
                    @forelse($projects as $project)
                        <li class="list-group-item border-0 mb-3 shadow-sm">
                            <a class="text-secondary d-flex justify-content-between align-items-center"
                               href="{{ route('projects.show', $project) }}"
                            >
                    <span class=" font-weight-bold">
                        {{ $project->title }}
                    </span>
                                <span class="text-black-50">
                        {{ $project->created_at->format('d/m/Y')}}
                    </span>
                            </a>
                        </li>
                    @empty
                        <li class="list-group-item border-0 mb-3 shadow-sm">
                            No hay proyectos para mostrar
                        </li>
                    @endforelse
                    {{ $projects->links() }}
                </ul>
            </div>
        </main>
    </div>
{{--    <h1>@lang('Projects')</h1>--}}
{{--    @auth--}}
{{--        <a href="{{ route('projects.create') }}">Crear proyecto</a>--}}
{{--    @endauth--}}
{{--    <ul>--}}
{{--        @forelse($projects as $project)--}}
{{--            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }} <br /><small>{{ $project->description }}</small> <br /> {{ $project->created_at->diffForHumans() }}</a> </li>--}}
{{--        @empty--}}
{{--            <li>No hay proyectos para mostrar</li>--}}
{{--        @endforelse--}}
{{--        {{ $projects->links() }}--}}
{{--    </ul>--}}
@endsection
