@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <main>
            <div class="py-15 max-w-md w-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 rounded-md shadow-sm bg-white">
                    <form class="bg-white py-3 px-4"
                          method="POST"
                          action="{{ route('messages.store') }}">
                        @csrf
                        <h1 class="text-5xl">@lang('Contact')</h1>
                        <hr>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('name') is-invalid @else border-0 @enderror"
                                   id="name"
                                   name="name"
                                   placeholder="Escribe aquí tu nombre..."
                                   value="{{ old('name') }}"
                            >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') is-invalid @else border-0 @enderror"
                                   type="text"
                                   name="email"
                                   placeholder="Escribe aquí tu e-mail..."
                                   value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">Asunto</label>
                            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('subject') is-invalid @else border-0 @enderror"
                                   id="subject"
                                   name="subject"
                                   placeholder="Escribe aquí el asunto de tu mensaje..."
                                   value="{{ old('subject') }}">
                            @error('subject')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Contenido</label>
                            <textarea class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('subject') is-invalid @else border-0 @enderror"
                                      id="content"
                                      name="content"
                                      placeholder="Escribe aquí el contenido de tu mensaje...">{{ old('content') }}</textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <button class="mt-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2">@lang('Send')</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
