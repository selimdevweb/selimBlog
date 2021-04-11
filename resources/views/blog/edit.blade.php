@extends('layouts.app')
@section('content')
<div class=" w-4/5 m-auto text-center">
    <div class=" py-15 border-b border-gray-200">
        <h1 class="text-6xl">
           Editer la publication
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <form
    action="/blog/{{ $post->slug }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input
    type="text"
    name="title"
    placeholder="{{ $post->title }}"
    value="{{ $post->title }}"
    class=" bg-transparent block border-b-2 w-full h-20 text-5xl outline-none p-3">

    <textarea
    name="description"
    class="bg-transparent block border-b-2 w-full p-3 h-60 text-xl outline-none mb-2" >{{ $post->description }}</textarea>

   {{--  <div>
        <label
        class="w-44 flex flex-col items-center  px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
        <span class=" mt-2 text-base leading-normal">
             Ajouter fichier
        </span>
        <input
        type="file"
        name="image"
        class="hidden">
        </label>
    </div> --}}

    <button
    type="submit"
    class="uppercase mt-15 bg-blue-500 text-gray-100
    text-lg font-extrabold py-4 px-8 rounded-3xl">
        Publier
    </button>
</form>
</div>

@endsection
