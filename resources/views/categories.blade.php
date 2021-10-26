@extends('layout/main')

@section('container')

<h2>
    <p>Post Categories</p>
</h2>
@foreach ($categories as $p)
<ul>
    <li>
        <h3><a href="/categories/{{ $p->slug }}" class="text-decoration-none">{{ $p->name }}</a></h3>
    </li>
</ul>
@endforeach
@endsection
