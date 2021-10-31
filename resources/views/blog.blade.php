@extends('layout/main')

@section('section')
{{-- <section class="w3l-portfolio-8 py-5 mt-4">
    <div class="portfolio-main py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="title-content text-center">
                <h3 class="title-big mx-lg-5">{{ $title }}</h3>
                <h3 class="title-small">Beberapa postingan yang saya buat di blog ini</h3>
            </div>
            <div class="col galler-top mx-lg-5 mt-5">
                @if ($posts->count() > 0 )
                <div class="col-lg">
                    <section class="w3l-index3" id="about">
                        <h4 class="title-small mx-lg-5">Last Post</h4>
                        <div class="midd-w3 px-2">
                            <div class="container pt-lg-5 py-md-3 py-2">
                                <div class="row">
                                    <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                                        <img src="https://source.unsplash.com/600x400?{{ $posts[0]->category->name }}"
                                            alt="" class="radius-image-full img-fluid">
                                    </div>
                                    <div class="col-lg-6 align-self">
                                        <h3 class="title-big mx-0">{{ $posts[0]->title }}</h3>
                                        <a href="/categories/{{ $posts[0]->category->slug }}" class="title-small">{{
                                            $posts[0]->category->name }}</a>
                                        <p> {{ $posts[0]->excerpt }}...</p>
                                        <p>By : <a href="/authors/{{ $posts[0]->user->username }}" class="fs-5">{{
                                                $posts[0]->user->name }}</a>
                                        </p>
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                        <br>
                                        <a href="/blog/{{ $posts[0]->slug }}"
                                            class="btn btn-style btn-primary mt-lg-5 mt-4">Read more <span
                                                class="fa fa-long-arrow-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                            <a href="#url" data-lightbox="example-set" data-title="Branding Design">
                                <figure>
                                    <img src="https://source.unsplash.com/600x400?{{ $p->category->name }}"
                                        alt="product" class="img-fluid radius-image">
                                    <div class="p">
                                        <a href="/blog/{{ $p->slug }}" class="mb-5 img-title">{{ $p->title }}</a>
                                        <br>
                                        <a href="/categories/{{ $p->category->slug }}" class="title-small">{{
                                            $p->category->name }}</a>
                                        <br>
                                        <p> {{ $p->excerpt }}...</p>
                                        <p>By : <a href="/authors/{{ $p->user->username }}" class="fs-5">{{
                                                $p->user->name }}</a>
                                        </p>
                                        <p href="title-small">
                                            {{ $p->created_at->diffForHumans() }}
                                        </p>
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
    </div> --}}
    <section class="w3l-blogpost-content py-5 mt-5">
        <div class="container py-lg-4 py-md-3 py-2">
            <div class="title-content text-center">
                <h3 class="title-toobig">Latest blog posts</h3>
                <p class="mt-md-4 mt-3 mx-lg-5 px-lg-5">Beberapa postingan yang saya buat diblog ini</p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8">
                    <p class="title-small">{{ $title }}</p>
                    <div class="row">
                        @foreach ($posts as $p)
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <div class="position-absolute px-3 py-2"
                                        style="background-color: rgba(0, 0, 0, 0.5)">
                                        <a href="/categories/{{ $p->category->slug }}" class="title-small text-white">{{
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
                                    <p><a href="/categories/{{ $p->category->slug }}" class="title-small">{{
                                            $p->category->name }}</a></p>
                                    <p class="mb-4">{{ $p->excerpt }}...
                                    </p>
                                    <div class="author align-items-center">
                                        <a href="#img" class="comment-img">
                                            <img src="/images/me.jpg" alt="" class="img-fluid">
                                        </a>
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="/authors/{{ $p->user->username }}">{{ $p->user->name }} </a>
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
                        <ul class="page-pagination">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#url">2</a></li>
                            <li><a class="page-numbers" href="#url">3</a></li>
                            <li><a class="page-numbers" href="#url">...</a></li>
                            <li><a class="page-numbers" href="#url">15</a></li>
                            <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                    <!-- //pagination -->
                </div>
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                    <aside class="sidebar">
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h4>Search here</h4>
                            </div>
                            <form action="#" class="search-box" method="post">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search..." required="">
                                    <button><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <ul class="blog-cat">
                                @foreach ($categories as $category)

                                <li><a href="/categories/{{ $category->slug }}">{{ $category->name }} </a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Popular Post Widget-->

                        <!-- sidebar sticky -->
                        <div class="sidebar-sticky">
                            <div class="sidebar-sticky-fix">
                                <!-- Tags Widget-->
                                <div class="sidebar-widget popular-tags">
                                    <div class="sidebar-title">
                                        <h4>Tags</h4>
                                    </div>
                                    <a href="#url">Technology</a>
                                    <a href="#url">Modern</a>
                                    <a href="#url">Web</a>
                                    <a href="#url">Agency</a>
                                    <a href="#url">Web Development</a>
                                    <a href="#url">Digital</a>
                                    <a href="#url">Marketing</a>
                                </div>

                            </div>
                        </div>
                        <!-- //sidebar sticky -->

                    </aside>
                </div>
            </div>
        </div>
    </section>
    @endsection