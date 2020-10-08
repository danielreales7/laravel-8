@extends('layout')

@section('title', 'Porfolio | ' . $project->title)

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <main>
            <div class="py-15">
                <div class="w-full mx-auto sm:px-6 lg:px-8 rounded-md shadow-sm bg-white">
                    @if($project->image)
                        <img class="w-full" src="/storage/{{ $project->image }}" alt="{{ $project->title }}">
                    @endif
                    <h1 class="text-4xl">{{ $project->title }}</h1>
                    @if($project->category_id)
                        <a href="{{ route('categories.show', $project->category) }}" class="badge badge-info">{{ $project->category->name }}</a>
                    @endif
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->created_at->diffForHumans() }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.index') }}">
                            Regresar
                        </a>
                        @auth
                            <div class="inline-flex">
                                @can('update', $project)
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2"
                                       href="{{ route('projects.edit', $project) }}"
                                    >Editar</a>
                                @endcan
                                @can('delete', $project)
                                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded mb-2"
                                       href="#"
                                       onclick="document.getElementById('delete-project').submit()"
                                    >Eliminar</a>
                                @endcan
                            </div>
                            @can('delete', $project)
                                <form id="delete-project"
                                      class="d-none"
                                      method="POST" action="{{ route('projects.destroy', $project) }}">
                                    @csrf @method('DELETE')
                                </form>
                            @endcan
                        @endauth
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
