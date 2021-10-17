{{-- @dd($post) --}}
@extends('layout/main')

@section('container')
    <h2>{{ $post->title }}</h2>
    {{-- <h5>{{ $post['author'] }}</h5> --}}
    <p>By.Hidayat in {{ $post->category->name }}</p>
    {!!  $post->body !!}

    <a href="/blog">back to post</a>
@endsection