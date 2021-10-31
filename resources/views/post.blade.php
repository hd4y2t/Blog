{{-- @dd($post) --}}
@extends('layout/main')

@section('section')
<section class="w3l-blogpost-content py-5 mt-5">
    <div class="container py-lg-4 py-md-3 py-2">
        <div class="title-content text-center">
            <h3 class="title-big mx-lg-5">{{ $post->title }}</h3>
            <ul class="blog-list mt-3 mb-3">
                <li>
                    <p class="title-small"><span class="fa fa-user"></span> <a
                            href="/authors/{{ $post->user->username }}">{{
                            $post->user->name }}</a></p>
                </li>
                <li>
                    <p class="title-small"><span class="fa fa-clock-o"></span> August 28, 2020</p>
                </li>
                <li>
                    <p class="title-small"><span class="fa fa-quote-left"></span> <a
                            href="/categories/{{ $post->category->slug }}">{{
                            $post->category->name }}</a></p>
                </li>
            </ul>
        </div>
        <div class="row mt-5">
            <div class="text-11 col-lg-8">
                <div class="text11-content">
                    <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}"
                        class="img-fluid mb-md-4 radius-image-full" alt="">
                    <p>{!! $post->body !!}</p>
                    <h5 class="quote">“Success is not the key to happiness. Happiness is the key to success. If you love
                        what you are doing, you will be successful.”
                        <footer class="blockquote-footer mt-3"> Albert Jain</footer>
                    </h5>
                    <div class="social-share-blog mt-5">
                        <ul class="social m-0 p-0">
                            <li>
                                <p class="m-0 mr-4">Share this post :</p>
                            </li>
                            <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="nav-links">
                        <div class="nav-previous">
                            <a href="#url" rel="prev">
                                <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" alt=""
                                    class="img-fluid radius-image">
                                <div class="post-data align-self">
                                    <span class="nav-arrow-label"><span
                                            class="fa fa-arrow-left mr-2"></span>Previous</span>
                                    <h6 class="post-title">Simply the best. Better than the rest.</h6>
                                </div>
                            </a>
                        </div>
                        <div class="nav-next text-right">
                            <a href="#url" rel="next">
                                <div class="post-data align-self">
                                    <span class="nav-arrow-label">Next<span
                                            class="fa fa-arrow-right ml-2"></span></span>
                                    <h6 class="post-title">Build your next landing page without coding.</h6>
                                </div>
                                <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" alt=""
                                    class="img-fluid radius-image">
                            </a>
                        </div>
                    </div>
                    <!-- author card -->
                    <div class="author-card author-listhny my-lg-5 my-sm-4">
                        <div class="row">
                            <div class="author-left col-lg-3 col-md-4 mb-md-0 mb-4">
                                <a href="#">
                                    <img class="img-fluid" src="/images/me.jpg" alt=" ">
                                </a>
                            </div>
                            <div class="author-right col-lg-9 col-md-8 position-relative align-self">

                                <h4><a href="#" class="title-team-28">Hidayat</a></h4>
                                <p class="para-team mb-0 mt-0">Jangan sampai ada dan tiada mu didunia ini tidak ada
                                    bedanya</p>

                                <div class="share-icons mt-4">
                                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#linkedin"><span class="fa fa-linkedin"></span></a>
                                    <a href="#github"><span class="fa fa-github"></span></a>
                                    {{-- <a href="#google"><span class="fa fa-google-plus"
                                            aria-hidden="true"></span></a>
                                    <a href="#vk" class="vk"><span class="fa fa-vk"></span></a> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Recent Posts</h4>
                        </div>
                        @foreach ($posts as $p)
                        <article class="post">
                            <figure class="post-thumb"><img
                                    src="https://source.unsplash.com/featured/{{ $p->category->name }}" alt=""></figure>
                            <div class="text"><a href="blog-single.html">{{ $p->title }}
                                </a>
                            </div>
                            <div class="post-info">{{ $p->created_at->diffForHumans() }}</div>
                        </article>
                        @endforeach
                    </div>

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
{{-- <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container pt-lg-5 py-md-3 py-2">
            <div class="row">
                <div class="container">
                    <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" alt=""
                        class="radius-image-full img-fluid mt-5 px-md-3 ">
                </div>
                <h2 class="title-big mx-0">{{ $post->title }}</h2>
                <br>
                <p class="title-small mb-3">{{ $post->user->username }} in <a
                        href="/categories/{{ $post->category->name }}" class="text-decoration-none">{{
                        $post->category->name }}</a> {{ $post->created_at->diffForHumans() }} </p>
                {!! $post->body !!}
                <a href="/blog" class="text-decoration-none d-block mt-3">back to post</a>
            </div>
        </div>
    </div>
</section> --}}