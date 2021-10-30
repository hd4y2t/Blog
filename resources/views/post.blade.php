{{-- @dd($post) --}}
@extends('layout/main')

@section('section')
    <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container pt-lg-5 py-md-3 py-2">
            <div class="row">
                {{-- <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4"> --}}
                    <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" alt="" class="radius-image-full img-fluid mt-5">
                {{-- </div> --}}
                <h2 class="title-big mx-0">{{ $post->title }}</h2>
                <p class="title-small mb-3">{{ $post->user->username }} in <a href="/categories/{{ $post->category->name }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }} </p>
                {!!  $post->body !!}
                <a href="/blog" class="text-decoration-none d-block mt-3">back to post</a>
            </div>
        </div>
    </div>
</section>
    {{-- <h5>{{ $post['author'] }}</h5> --}}
@endsection