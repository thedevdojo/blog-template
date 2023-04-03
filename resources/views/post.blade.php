@extends('layouts.app')

@section('content')

    @php
        $post = Post::where('slug', $post)->firstOrFail();
    @endphp

    <div class="max-w-3xl pb-10 mx-auto space-y-8 prose prose-2xl">
        <a href="{{ route('blog') }}" class="hover:underline">&larr; Back to the Blog</a>
        <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
        @php
            $body = '<p>' . implode('</p><p>', array_filter(explode("\n", $post->body))) . '</p>';
        @endphp
        {!! $body !!}
    </div>

@endsection