@if($project->image)
    <img class="w-full" style="height: 250px; object-fit: cover"  src="/storage/{{ $project->image }}" alt="{{ $project->title }}">
@endif
<div class="items-center justify-center bg-grey-lighter">
    <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-black">
        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-base leading-normal">Select a file</span>
        <input type='file' name="image" class="hidden" />
    </label>
</div>
<label>
    Categoría del proyecto<br />
    <select name="category_id" id="category_id" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5">
        <option value="">Seleccione</option>
        @foreach($categories as $id => $name)
            <option value="{{ $id }}" {{ $id == old('category_id',$project->category_id) ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</label>
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
