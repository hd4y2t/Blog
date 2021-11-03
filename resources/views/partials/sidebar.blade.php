<aside class="sidebar">
    <div class="sidebar-widget sidebar-blog-category">
        <div class="sidebar-title">
            <h4>Search here</h4>
        </div>
        <form action="/blog" class="search-box">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="form-group">
                <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                <button type="submit"><span class="fa fa-search"></span></button>
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
            <li><a href="/blog?category={{ $category->slug }}">{{ $category->name }} </a></li>
            @endforeach
        </ul>
    </div>

    <!-- Popular Post Widget-->
    <div class="sidebar-widget popular-posts">
        <div class="sidebar-title">
            <h4>Recent Posts</h4>
        </div>
        @foreach ($recent as $p)
        <article class="post">
            <figure class="post-thumb"><img src="https://source.unsplash.com/random" alt="">
            </figure>
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