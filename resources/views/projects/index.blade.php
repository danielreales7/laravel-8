@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Projects')</h1>
    @auth
        <a href="{{ route('projects.create') }}">Crear proyecto</a>
    @endauth
    <ul>
        @forelse($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }} <br /><small>{{ $project->description }}</small> <br /> {{ $project->created_at->diffForHumans() }}</a> </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection
