<!-- section-->
<section  data-scrollax-parent="true" id="sec5">
    <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span>Blog</div>
    <div class="container">
        <!-- section-title -->
        <div class="section-title fl-wrap">
            <h2>{{ $title }}</h2>
        </div>
        <!-- section-title end -->
        <div class="process-wrap fl-wrap">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="post-body">
                        <div class="category">{{ $post->categories->implode('name', ', ') }}</div>
                        <div class="post-image">
                            <img src="{{ $post->thumbnail->path }}" />                            
                        </div>
                        <div class="post-info">
                            <div class="post-date">{{ $post->published_at->toDateString() }}</div>
                            <a href="#">
                                <h3>{{ $post->title }}</h3>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('blog') }}" class="btn float-btn flat-btn color-btn mar-top">Blog</a>
    </div>
    <div class="bg-parallax-module" data-position-top="90"  data-position-left="30" data-scrollax="properties: { translateY: '-150px' }"></div>
    <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
    <div class="sec-lines"></div>
</section>
<!-- section end -->
