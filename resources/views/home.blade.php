@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 flex h-screen justify-center items-center p-10">
            <div>
                <h1 class="text-5xl">Desarrollo Web</h1>
                <p class="font-thin mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, quasi non perspiciatis corrupti a repellendus numquam dolore dolorum corporis omnis, porro velit aut ut nostrum vel cumque fugiat labore mollitia!</p>
                <div class="flex flex-col text-center">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2"
                       href="{{ route('contact') }}"
                    >Contáctame</a>
                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                       href="{{ route('projects.index') }}"
                    >Portafolio</a>
                </div>
            </div>
            <div>
                <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
            </div>
        </div>
    </div>
@endsection
