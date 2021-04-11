@extends('layouts.app')
@section('content')
<div class=" w-4/5 m-auto text-center">
    <div class=" py-15 border-b border-gray-200">
        <h1 class="text-6xl">
           {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class=" text-gray-500">
        by <span class=" font-bold italic text-gray-800">{{ $post->user->name }}</span>,  Créé le {{ date('jS M Y',
        strtotime($post->updated_at)) }}
    </span>
    <p class="text-xl text-gray-900 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection
