@extends('layouts.app')

@section('content')

    <div class="max-w-3xl pb-10 mx-auto space-y-8">
        @foreach(Post::all() as $post)
            <div class="w-full space-y-2">
                <h2 class="text-xl font-bold"><a href="/blog/{{ $post->slug }}" class="hover:underline">{{ $post->title }}</a></h2>
                <p class="opacity-70">{{ substr(strip_tags($post->body), 0, 200) }}@if(strlen(strip_tags($post->body)) > 200){{ '...' }}@endif</p>
            </div>
        @endforeach
    </div>

@endsection