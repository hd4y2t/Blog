@extends('layout/main')

@section('section')
<section class="w3l-blogpost-content py-5 mt-5">
    <div class="container py-lg-4 py-md-3 py-2">
        <div class="title-content text-center">
            <h3 class="title-toobig">Latest blog posts</h3>
            <p class="mt-md-4 mt-3 mx-lg-5 px-lg-5">Beberapa postingan yang saya buat diblog ini</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-8">
                @if ($posts->count() > 0 )
                <p class="title-small">{{ $title }}</p>
                <div class="row">
                    @foreach ($posts as $p)
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)">
                                    <a href="/blog?category={{ $p->category->slug }}" class="title-small text-white">{{
                                        $p->category->name }}</a>
                                </div>
                                <a href="/blog/{{ $p->slug }}">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="https://source.unsplash.com/600x400?{{ $p->category->name }}"
                                        alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="/blog/{{ $p->slug }}" class="blog-desc">{{ $p->title }}
                                </a>
                                {{-- <p><a href="/categories/{{ $p->category->slug }}" class="title-small">{{
                                        $p->category->name }}</a></p> --}}
                                <p class="mb-4">{{ $p->excerpt }}...
                                </p>
                                <div class="author align-items-center">
                                    <a href="#img" class="comment-img">
                                        <img src="/images/me.jpg" alt="" class="img-fluid">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="/blog?author={{ $p->user->username }}">{{ $p->user->name }} </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            {{-- <span class="meta-value"> Sep 10, 2020 </span>. --}}
                                            <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> {{
                                                $p->created_at->diffForHumans() }}
                                                min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- pagination -->
                <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                    {{ $posts->links('pagination::default') }}
                </div>
                <!-- //pagination -->
                @else
                <div>
                    <p class="blog-desc">Belum ada postingan</p>
                </div>
                @endif
            </div>
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                @include('partials/sidebar')
            </div>
        </div>
    </div>
</section>
@endsection