@extends('layout/main')

@section('section')
<section class="w3l-portfolio-8 py-5 mt-4">
    <div class="portfolio-main py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="title-content text-center">
                <h3 class="title-big mx-lg-5">{{ $title }}</h3>
                <h3 class="title-small">Beberapa postingan yang saya buat di blog ini</h3>
            </div>
            <div class="row galler-top mx-lg-5 mt-5">

    @if ($posts->count() > 0 )
            <div class="col-lg">
                    <section class="w3l-index3" id="about">
                    <h4 class="title-small mx-lg-5">Last Post</h4>
                        <div class="midd-w3 px-2">
                            <div class="container pt-lg-5 py-md-3 py-2">
                                <div class="row">
                                    <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                                        <img src="https://source.unsplash.com/600x400?{{ $posts[0]->category->name }}" alt="" class="radius-image-full img-fluid">
                                    </div>
                                    <div class="col-lg-6 align-self">
                                        <h3 class="title-big mx-0">{{ $posts[0]->title }}</h3>
                                        <a href="/category/{{ $posts[0]->category->slug }}" class="title-small">{{ $posts[0]->category->name }}</a>
                                    <br>
                                        <p class="mt-md-4 mt-3"{{ $posts[0]->excerpt }}...</p>
                                        <p> {{ $posts[0]->excerpt }}...</p>
                                        <p>By : <a href="/authors/{{ $posts[0]->user->username }}" class="fs-5">{{ $posts[0]->user->name }}</a></p>
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                        <br>
                                        <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-style btn-primary mt-lg-5 mt-4">Read more <span class="fa fa-long-arrow-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- <div class="protfolio-item hover14 mt-4 pl-lg-2">
                        <a href="#url" data-lightbox="example-set"
                        data-title="Gradient Website Development">
                            <figure>
                                <img src="images/project2.jpg" alt="product" class="img-fluid radius-image">
                                <div class="p-4">
                                    <p>Web Development</p>
                                    <a href="#url" class="mb-5 img-title">Gradient Website Development</a>
                                </div>
                            </figure>
                        </a>
                    </div> --}}
                </div>
                @else
            </div>
<p class="text-center fs-4">No post found</p>
@endif
<div class="container">
    <div class="row galler-top mx-lg-5 mt-5">
        @foreach ($posts->skip(1) as $p)
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="protfolio-item hover14 pr-lg-2">
                        <a href="#url" data-lightbox="example-set"
                            data-title="Branding Design">
                            <figure>
                                 {{-- <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.6)">
                                    <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none text-white">{{ $p->category->name }}</a> 
                                </div> --}}
                                <img src="https://source.unsplash.com/600x400?{{ $p->category->name }}" alt="product" class="img-fluid radius-image">
                                <div class="p">
                                      <a href="/blog/{{ $p->slug }}" class="mb-5 img-title">{{ $p->title }}</a>
                                    <br>
                                    <a href="/category/{{ $p->category->slug }}" class="title-small">{{ $p->category->name }}</a>
                                    <br>
                                    <p> {{ $p->excerpt }}...</p>
                                     <p>By : <a href="/authors/{{ $p->user->username }}" class="fs-5">{{ $p->user->name }}</a></p>
                                     {{-- <p class="card-text">{{ $p->excerpt }}...</p> --}}
                                     {{ $p->created_at->diffForHumans() }}
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
        
        {{-- @endsection
        @extends('layout/main')
        
        @section('section')
        <!--/gallery-->
        <!--//gallery-->
        <!-- testimonials section -->
        
        @endsection --}}
        {{-- @section('container')
        
        <h1>Halaman Home!</h1>
        @endsection --}}
        
        
        {{-- 
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
                </div> --}}