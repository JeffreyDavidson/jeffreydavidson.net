@extends('layouts.master')

@section('content')
<!-- Content-->
<div class="content">
    <div class="single-page-decor"></div>
    <!-- single-page-fixed-row-->
    <div class="single-page-fixed-row blog-single-page-fixed-row">
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down</span>
        </div>
        @widget('BlogFilters')
    </div>
    <!-- single-page-fixed-row end-->
    <!-- section end-->  
    <!-- section --> 
    <section data-scrollax-parent="true" id="sec1">
        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span>{{ $post->title }}</div>
        <div class="container">
            <!-- blog-container  -->
            <div class="fl-wrap post-container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- post -->
                        <div class="post fl-wrap fw-post">
                            <h2><span>{{ $post->title }}</span></h2>
                            <div class="parallax-header">
                                <a href="#">{{ $post->published_at->toDateString() }}</a>
                                <span>Category : </span>
                                @foreach($post->categories as $category)
                                    <a href="{{ route('category', $category) }}">{{ $category->name }}</a> 
                                @endforeach
                            </div>
                            <!-- blog media -->
                            <div class="blog-media fl-wrap nomar-bottom">
                                <div class="single-slider-wrap slider-carousel-wrap ">
                                    <div class="single-slider cur_carousel-slider-container fl-wrap" >
                                        @foreach($post->attachments as $attachment)
                                            <div class="slick-slide-item">
                                                <img src="{{ asset($attachment->path) }}" alt="{{ $attachment->name }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="sp-cont sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="sp-cont sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <!-- blog media end -->
                            <div class="parallax-header fl-wrap"><span>Tags :</span>
                                @foreach($post->tags as $tag)
                                    <a href="{{ route('tag', $tag) }}">{{ $tag->name }}</a> 
                                @endforeach
                            </div>
                            <div class="blog-text fl-wrap">
                                <div class="clearfix"></div>
                                {!! $post->body !!}
                                <ul class="post-counter single-post-counter">
                                    <li><i class="fa fa-eye"></i><span>{{ $post->reads_count }}</span></li>
                                    <li><i class="fal fa-comments-alt"></i><span>{{ $post->comments_count }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- post end-->
                        <!-- post-author-->                                   
                        <div class="post-author">
                            <div class="author-img">
                                <img alt="Jeffrey Davidson" src="{{ asset('images/avatar.jpg') }}">	
                            </div>
                            <div class="author-content">
                                <h5>Jeffrey Davidson</h5>
                                <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket; from the lower end the rope was traced half-way along the pole’s length, and firmly secured so, with intertwistings of twine.</p>
                                <div class="team-single-social fl-wrap">
                                    <span>Follow : </span>
                                    <ul>
                                        <li><a href="https://www.facebook.com/jeffreydavidsonwebdev" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/jdavidsonwebdev" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/jeffrey-davidson-8176205a/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--post-author end-->
                        @if($post->comments->isNotEmpty())
                            <div id="comments" class="single-post-comm">
                                <!--title-->
                                <h6 id="comments-title">Comments<span> ( {{$post->comments->count()}} )</span></h6>
                                <ul class="commentlist clearafix">
                                    @each('pages.partials.comment', $post->comments, 'comment')
                                </ul>
                                <div class="clearfix"></div>
                                @include('pages.partials.comment-form')
                            </div>
                        @endif
                        <!--comments end -->
                    </div>
                    <!-- blog-sidebar  -->
                    <div class="col-md-4">
                        @include('pages.partials.blog-sidebar')
                    </div>
                    <!-- blog-sidebar end -->
                    <div class="limit-box fl-wrap"></div>
                </div>
                @if ($previousPost || $nextPost)
                <!-- content-nav -->
                    <div class="content-nav">
                        <ul>
                            <li>
                                @if ($previousPost)
                                    <a href="{{ route('post', $previousPost->slug) }}" class="ln">
                                        <i class="fal fa-arrow-left"></i>
                                        <span class="tooltip">Prev - {{ \Str::limit($previousPost->title, 25) }}</span>
                                    </a>
                                @endif
                            </li>

                            <li>
                                <a href="{{ route('blog') }}" class="cur-page"><span>All Posts</span></a>
                            </li>
                            <li>
                                @if ($nextPost)
                                    <a href="{{ route('post', $nextPost->slug) }}" class="rn">
                                        <i class="fal fa-arrow-right"></i>
                                        <span class="tooltip">Next - {{ \Str::limit($nextPost->title, 25) }} </span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- content-nav end-->     
                @endif
            </div>
            <!-- blog-container end    -->
        </div>
        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
        <div class="sec-lines"></div>
    </section>
    <!-- section end-->              
    @include('pages.partials.contact-section')
</div>
<!-- Content end -->
@endsection