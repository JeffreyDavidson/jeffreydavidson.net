@extends('layouts.master')

@section('content')
<!-- Content-->
<div class="content">
    <!-- section-->
    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
        <div class="bg par-elem"  data-bg="images/blog.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="pattern-bg"></div>
        <div class="container">
            <div class="section-title">
                <h2>My  <span> Latest news </span></h2>
                <div class="horizonral-subtitle"><span>Journal</span></div>
            </div>
        <a href="#sec1" class="custom-scroll-link hero-start-link"><span>Let's Start</span> <i class="fal fa-long-arrow-down"></i></a>
        </div>
    </section>
    <!-- section end-->
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
    <!-- section --> 
    <section data-scrollax-parent="true" id="sec1">
        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span>Journal</div>
        <div class="container">
            <!-- blog-container  -->
            <div class="fl-wrap post-container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach($posts as $post)
                            <!-- post -->
                            <div class="post fl-wrap fw-post">
                                <h2>
                                    <a href="{{ route('post', $post) }}">
                                        <span>{{ $post->title }}</span>
                                    </a>
                                </h2>
                                <div class="parallax-header">
                                    <a>{{ $post->published_at->toDateString() }}</a>
                                    <span>Category : </span>
                                    @foreach($post->categories as $category)
                                        <a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a> 
                                    @endforeach
                                </div>
                                @if(!empty($post->thumbnail))
                                    <!-- blog media -->
                                    <div class="blog-media fl-wrap">
                                        <a href="{{ route('post', $post) }}">
                                            <img src="{{ asset($post->thumbnail->path) }}" alt="{{ $post->thumbnail->name }}">
                                        </a>
                                    </div>
                                    <!-- blog media end -->
                                @endif    
                                <div class="parallax-header fl-wrap"><span>Tags : </span>
                                    @foreach($post->tags as $tag)
                                        <a href="#">{{ $tag->name }}</a> 
                                    @endforeach
                                </div>
                                <div class="blog-text fl-wrap">
                                    <div class="clearfix"></div>
                                    <h3><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h3>
                                    {!! $post->excerpt !!}
                                    <a href="{{ route('post', $post) }}" class="btn float-btn color-btn flat-btn">Read more </a>
                                    <ul class="post-counter">
                                        <li><i class="fa fa-eye"></i><span>{{ $post->reads_count }}</span></li>
                                        <li><i class="fal fa-comments-alt"></i><span>{{ $post->comments_count }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post end-->
                        @endforeach
                    </div>
                    <!-- blog-sidebar  -->
                    <div class="col-md-4">
                        @include('pages.partials.blog-sidebar')
                    </div>
                    <!-- blog-sidebar end -->
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- det box end-->
                <div class="content-nav mar-top">
                    <ul>
                        <li>
                            @if($posts->previousPageUrl())
                                <a href="{{ $posts->previousPageUrl() }}" class="ln">
                                    <i class="fal fa-arrow-left"></i>
                                    <span class="tooltip">Prev - Page {{ $posts->currentPage() - 1 }}</span>
                                </a>
                            @endif
                        </li>

                        <li>
                            <span class="cur-page">
                                <span>Page {{ $posts->currentPage() }}</span>
                            </span>    
                        </li>

                        <li>
                            @if($posts->hasMorePages())
                                <a href="{{ $posts->nextPageUrl() }}" class="rn">
                                    <i class="fal fa-arrow-right"></i>
                                    <span class="tooltip">Next - Page {{ $posts->currentPage() + 1 }}</span>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
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
