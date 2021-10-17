@extends('layout/main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($post as $p)
<h2>
    <a href="/blog/{{ $p->slug }}">{{ $p->title }}</a>
</h2>
<p>By : Hidayat in <a href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a> </p>
<p>{{ $p->excerpt }}<a href="/blog/{{ $p->slug }}">Read more..</a></p>
{{-- <p>{{ $p['body'] }}</p> --}}
@endforeach
@endsection
