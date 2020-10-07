@extends('layout')

@section('title', 'Editar proyecto')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <main>
            <div class="py-15 max-w-md w-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 rounded-md shadow-sm bg-white">
                    <h1 class="text-4xl">Editar proyecto</h1>

                    @include('partials.validation-errors')

                    <form class="bg-white-200 py-3 px-4" method="POST" enctype="multipart/form-data" action="{{ route('projects.update', $project) }}">
                        @method('PATCH')

                        @include('projects._form', ['btnText' => 'Actualizar'])
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
