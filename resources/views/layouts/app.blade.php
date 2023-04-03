@extends('layouts.base')

@section('body')
    <div class="flex items-center justify-center py-10 text-4xl font-bold">
        <a href="{{ route('blog') }}" class="hover:underline">Blog</a>
    </div>
    
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
