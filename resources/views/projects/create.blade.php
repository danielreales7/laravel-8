@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <main>
            <div class="py-15 max-w-md w-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 rounded-md shadow-sm bg-white">
                    <h1 class="text-4xl">Crear nuevo proyecto</h1>

                    @include('partials.validation-errors')

                    <form class="bg-white-200 py-3 px-4" method="POST" action="{{ route('projects.store') }}">
                        @include('projects._form', ['btnText' => 'Guardar'])
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
