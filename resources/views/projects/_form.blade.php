@csrf
<label>
    Título del proyecto<br />
    <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"  type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br />
<label>
    URL del proyecto<br />
    <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"  type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br />
<label>
    Título del proyecto<br />
    <textarea class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"  name="description">{{ old('description', $project->description) }}</textarea>
</label>
<br />

<div class="flex flex-col text-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mb-2">{{ $btnText }}</button>
    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
       href="{{ route('projects.index') }}">
        Cancelar
    </a>
</div>
