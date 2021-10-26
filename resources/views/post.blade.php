{{-- @dd($post) --}}
@extends('layout/main')

@section('container')
    <h2 class="text-decoration-none">{{ $title }}</h2>
    
    {{-- <h5>{{ $post['author'] }}</h5> --}}
    <p class="text-decoration-none">{{ $post->user->username }} in <a href="/categories/{{ $post->category->name }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
    {!!  $post->body !!}

    <a href="/blog" class="text-decoration-none d-block mt-3">back to post</a>
@endsection