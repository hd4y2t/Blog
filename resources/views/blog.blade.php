@extends('layout/main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>
@if ($posts->count() > 0 )
<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
  <div class="card-body text-center">
    <a href="/blog/{{ $posts[0]->slug }}" class="fs-2 text-decoration-none text-dark">{{ $posts[0]->title }}</a>
    <small class="text-muted">
        <p>By : <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>  {{ $posts[0]->created_at->diffForHumans() }}
        </p>
    </small>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary btn-sm">Read more..</a>
  </div>
</div>
@else
<p class="text-center fs-4">No post found</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $p)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.6)">
                    <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none text-white">{{ $p->category->name }}</a> 
                </div>
                <img src="https://source.unsplash.com/600x400?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">
                         <a href="/blog/{{ $p->slug }}" class="text-decoration-none">{{ $p->title }}</a>
                    </h5>
                    <small>

                        <p>By : <a href="/authors/{{ $p->user->username }}" class="text-decoration-none">{{ $p->user->name }}</a></p>
                        <p class="card-text">{{ $p->excerpt }}...</p>
                        {{ $p->created_at->diffForHumans() }}
                    </small>
                    <p>
                        <a href="/blog/{{ $p->slug }}" class="btn btn-primary">Read more..</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
