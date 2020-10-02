@extends('layout')

@section('title', 'Home')

@section('content')
    <section class="bg-white border-b py-10">
        <div class="container max-w-5xl mx-auto m-8">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Home</h1>

            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Lorem ipsum dolor sit amet</h3>
                    <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.<br /><br />

                        Images from: <a class="text-orange-500 underline" href="https://undraw.co/">undraw.co</a></p>

                </div>
            </div>
        </div>
    </section>
    <div x-data="{ show:true }">
        <div class="w-12 h-12">
            <div class="bg-green-400 w-full h-full" x-show="show"></div>
        </div>

        <button @click="show = ! show">Toggle</button>
    </div>
    @auth
        {{ auth()->user()->name }}
    @endauth
@endsection
