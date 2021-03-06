@extends('layout/main')

@section('section')
<section class="w3l-banner-agency py-5" id="work">
    <div class="midd-w3 py-lg-5 py-md-4">
        <div class="container py-lg-2">
            <div class="row">
                <div class="col-lg-6 banner-content align-self pr-lg-5">
                    <h5 class="title-small mb-2">Introduce</h5>
                    <h3 class="title-toobig">My Name is Hidayat</h3>
                    <p class="mt-4">I'm Backend Developer</p>
                    <a href="#btn" class="btn btn-style btn-outline-info mt-lg-5 mt-4">About Me</a>
                    <br>
                    <a href="/blog" class="btn btn-style btn-info mt-lg-5 mt-4 mr-2">See my blog
                        <span class="fa fa-long-arrow-right"></a>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="image-block position-relative">
                        <img src="/images/me.jpg" alt="" class="img-fluid rounded-circle mt-lg-0 mt-4">
                    </div>
                </div>
            </div>
        </div>

        <!-- animations icons -->
        <div class="icon-effects-w3-1 text-right">
            <img src="/images/icon1.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-2 text-right">
            <img src="/images/icon4.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-3 text-right">
            <img src="/images/icon1.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-4 text-right">
            <img src="/images/icon4.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-5 text-right">
            <img src="/images/icon1.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-6 text-right">
            <img src="/images/icon4.png" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
    </div>
</section>
<!-- section -->
<section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3 py-2">
            <h3 class="title-small">A litle about me</h3>
            <h3 class="title-big mx-0 mb-md-5 mb-4">Introduce my self </h3>
            <div class="row">
                <div class="col-lg-5 mb-lg-0 mb-md-5 mb-4 align-self pr-lg-5">
                    <img src="images/me2.png" alt="" class="radius-image-full img-fluid">
                </div>
                <div class="col-lg-7">
                    <div class="row position-relative">
                        <div class="col-md-6 col-7">
                            <img src="images/image5.jpg" alt="" class="radius-image-full img-fluid">
                        </div>
                        <div class="col-md-5 col-5 pl-lg-5 pl-0 mt-lg-5">
                            <img src="images/image6.jpg" alt="" class="radius-image-full img-fluid">
                        </div>
                    </div>
                    <p class="mt-md-5 mt-3">Saya lahir pada 8 Agustus 1997 di palembang</p>
                    <p>Saya Seorang Backend Developer, memiliki skill dalam menggunakan bahasa pemprograman PHP, HTML,
                        CSS, dan beberapa framework seperti Codeigniter, Laravel, saya sedang mempelajari bahasa
                        pemprograman Go-lang, dan mencoba untuk menggunakan kubernetes ,aws</p>
                    <a href="#btn" class="btn link-style p-0 mt-lg-5 mt-4">See More..
                        <span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //section -->

<!-- about block3 -->
<!--/gallery-->
<section class="w3l-portfolio-8 py-5">
    <div class="portfolio-main py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="title-content text-center">
                <h3 class="title-small">My Blog</h3>
                <h3 class="title-big mx-lg-5">Beberapa postingan yang saya buat di blog ini</h3>
            </div>
            <div class="row galler-top mx-lg-5 mt-5">
                @foreach ($posts as $p)
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="protfolio-item hover14 pr-lg-2">
                        <a href="/category/{{ $p->category->slug }}" data-lightbox="example-set"
                            data-title="{{ $p->category->slug }}">
                            <figure>
                                <img src="https://source.unsplash.com/600x400?{{ $p->category->name }}" alt="product"
                                    class="img-fluid radius-image">
                                <div class="">
                                    <a href="/blog/{{ $p->slug }}" class="mb-5 img-title">{{ $p->title }}</a>
                                    <br>
                                    <a href="/category/{{ $p->category->slug }}" class="title-small">{{
                                        $p->category->name }}</a>
                                    <br>
                                    <p> {{ $p->excerpt }}...</p>
                                    <p>By : <a href="/authors/{{ $p->user->username }}" class="fs-5">{{ $p->user->name
                                            }}</a></p>
                                    {{ $p->created_at->diffForHumans() }}
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="text-center">
                    <a href="/blog" class="btn link-style p-0 mt-lg-5 mt-2">See all Blog <span
                            class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
        </div>
</section>
<!--//gallery-->
<!-- testimonials section -->

@endsection
{{-- @section('container')

<h1>Halaman Home!</h1>
@endsection --}}