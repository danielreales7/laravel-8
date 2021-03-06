@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <main>
            <div class="py-15">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-between items-center">
                    @isset($category)
                        <div>
                            <h1 class="text-4xl">{{ $category->name }}</h1>
                            <a href="{{ route('projects.index') }}">Regresar al portafolio</a>
                        </div>
                    @else
                        <h1 class="text-4xl">@lang('Projects')</h1>
                    @endisset
                    @can('create', $newProject)
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2"
                           href="{{ route('projects.create') }}"
                        >Crear proyecto</a>
                    @endcan
                </div>
                <div class="container mx-auto py-2 px-8">
                    <p class="font-thin">Proyectos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="flex flex-wrap justify-between items-start">
                        @forelse($projects as $project)
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                @if($project->image)
                                    <img class="w-full" style="height: 150px; object-fit: cover" src="/storage/{{ $project->image }}" alt="{{ $project->title }}">
                                @endif
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></div>
                                    <p class="text-gray-700 text-base">
                                        {{ $project->created_at->format('d/m/Y')}}
                                    </p>
                                    <p class="truncate">{{ $project->description }}</p>
                                    <div class="flex justify-between items-center">
                                        <a href="{{ route('projects.show', $project) }}"
                                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2"
                                        >Ver más...</a>
                                        @if($project->category_id)
                                            <a href="{{ route('categories.show', $project->category) }}" class="badge badge-info">{{ $project->category->name }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <li class="border-0 mb-3 shadow-sm">
                                No hay proyectos para mostrar
                            </li>
                        @endforelse
                        {{ $projects->links() }}
                    </div>
                    @can('view-deleted-projects')
                        <ul>
                            @foreach($deletedProjects as $deletedProject)
                                <li>
                                    {{ $deletedProject->title }}
                                    @can('restore', $deletedProject)
                                        <form method="POST" action="{{ route('projects.restore', $deletedProject) }}">
                                            @csrf @method('PATCH')
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2">Restaurar</button>
                                        </form>
                                    @endcan
                                    @can('forceDelete', $deletedProject)
                                        <form method="POST"
                                              onsubmit="return confirm('Esta acción no se puede deshacer, ¿Está seguro de eliminar el proyecto?')"
                                              action="{{ route('projects.forceDelete', $deletedProject) }}">
                                            @csrf @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded mb-2">Eliminar permanentemente</button>
                                        </form>
                                    @endcan
                                </li>
                            @endforeach
                        </ul>
                    @endcan
                </div>
            </div>
        </main>
    </div>
@endsection
