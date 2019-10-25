<!-- section-->
<section  data-scrollax-parent="true">
    <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span>My Blog</div>
    <div class="container">
        <!-- section-title -->
        <div class="section-title fl-wrap">
            <h3>Journal</h3>
            <h2>My Latest <span>news</span></h2>
            <p>I love writing about my passions, whether its about my career field, my day to day life, or just fatherhood.</p>
        </div>
        <!-- section-title end -->
        <!--article-wrap  -->
        <div class="article-wrap">
            <div class="row">
                @foreach($posts as $post)
                    <!--article -->
                    <div class="col-md-4">
                        <!-- post -->
                        <div class="post fl-wrap fw-post">
                            <h2><a href="blog-single.html"><span>{{ $post->title }}</span></a></h2>
                            <div class="parallax-header">
                                <a href="#">{{ $post->published_at->format('j M Y') }}</a>
                                <span>Category : </span>
                                @foreach($post->categories as $category)
                                    <a href="#">{{ $category->name }}</a>
                                @endforeach
                            </div>
                            <!-- blog media -->
                            <div class="blog-media fl-wrap">
                                <img src="{{ $post->thumbnail->path }}" alt="{{ $post->thumbnail->title }}">
                            </div>
                            <!-- blog media end -->
                            <div class="blog-text fl-wrap">
                                <div class="clearfix"></div>
                                <h3><a href="blog-single.html">{{ $post->title }}</a></h3>
                                <p>{{ $post->excerpt }}</p>
                                <a href="{{ route('post', $post) }}" class="btn float-btn color-btn flat-btn">Read more </a>
                                <ul class="post-counter">
                                    <li><i class="fa fa-eye"></i><span>{{ $post->reads_count }}</span></li>
                                    <li><i class="fal fa-comments-alt"></i><span>{{ $post->comments_count }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- post end-->
                    </div>
                    <!--article  end-->
                @endforeach
                <!--article -->
            </div>
        </div>
        <!--article-wrap   end-->
    </div>
    <div class="bg-parallax-module" data-position-top="90"  data-position-left="30" data-scrollax="properties: { translateY: '-150px' }"></div>
    <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
    <div class="sec-lines"></div>
 </section>
 <!-- section end -->
