@extends('layout/main')

@section('container')

@foreach ($posts as $p)
<h2>
    <a href="/blog/{{ $p['slug'] }}">{{ $p['title'] }}</a>
</h2>
<h5>{{ $p['author'] }}</h5>
<p>{{ $p['body'] }}</p>
@endforeach
@endsection
