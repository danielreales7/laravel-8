@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse($projects as $project)
            <li><a href="{{ route('portfolio.show', $project) }}">{{ $project->title }} <br /><small>{{ $project->description }}</small> <br /> {{ $project->created_at->diffForHumans() }}</a> </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        {{ $projects->links() }}

{{--        @if($portfolio)--}}
{{--            @foreach($portfolio as $portfolioItem)--}}
{{--                <li>{{ $portfolioItem['title'] }}</li>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <li>No hay proyectos para mostrar</li>--}}
{{--        @endif--}}

{{--        @isset($portfolio)--}}
{{--            @foreach($portfolio as $portfolioItem)--}}
{{--                <li>{{ $portfolioItem['title'] }}</li>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <li>No hay proyectos para mostrar</li>--}}
{{--        @endisset--}}
    </ul>
@endsection
