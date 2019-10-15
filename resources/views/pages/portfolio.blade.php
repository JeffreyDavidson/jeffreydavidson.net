@extends('layouts.master')

@section('content')
<!-- Content-->
<div class="content">
    <div class="single-page-decor"></div>
    <div class="single-page-fixed-row">
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down</span>
        </div>
    </div>
    <!-- section-->
    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
        <div class="bg par-elem"  data-bg="{{ asset('images/portfolio.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="pattern-bg"></div>
        <div class="container">
            <div class="section-title">
                <h2>Examples of my <span>HARD</span> work</h2>
                <div class="horizonral-subtitle"><span>PROJECTS</span></div>
            </div>
            <a href="#sec1" class="custom-scroll-link hero-start-link"><span>Let's Start</span> <i class="fal fa-long-arrow-down"></i></a>
        </div>
    </section>
    <!-- section end-->
    <!-- section-->
    <section data-scrollax-parent="true" id="sec1">
        <div class="section-subtitle"  data-scrollax="properties: { translateY: '150px' }" >Portfolio<span>//</span></div>
        <div class="container">
            <!-- filter -->
            <div class="filter-holder inline-filter fl-wrap mar-bottom">
                <div class="filter-button"><i class="fal fa-filter"></i><span>Filter : </span></div>
                <div class="gallery-filters">
                    <a href="#" class="gallery-filter gallery-filter-active" data-filter="*">All</a>
                    @foreach($projectCategories as $category)
                        <a href="#" class="gallery-filter" data-filter=".{{ $category->slug}}">{{ $category->name }}</a>
                    @endforeach
                </div>
                <div class="folio-counter">
                    <div class="num-album"></div>
                    <div class="all-album"></div>
                </div>
            </div>
            <!-- filter end-->
            <!-- portfolio start -->
            <div class="gallery-items spad vis-box-det white-det three-column">
                @foreach($projects as $project)
                    <!-- gallery-item-->
                    <div class="gallery-item @foreach($project->categories as $category) {{ $category->slug  }} @endforeach">
                        <div class="grid-item-holder">
                            <a href="{{ asset($project->thumbnail->path) }}" class="fet_pr-carousel-box-media-zoom image-popup">
                                <i class="fal fa-search"></i>
                            </a>
                            <img src="{{ asset($project->thumbnail->path) }}" alt="{{ $project->title }}">
                            <div class="box-item hd-box">
                                <div class="fl-wrap full-height">
                                    <div class="hd-box-wrap">
                                        <h2>
                                            <a href="{{ route('project', $project->slug) }}">{{ $project->name }}</a>
                                        </h2>
                                        <p>
                                            @foreach($project->categories as $category)
                                                <a>{{ $category->name }}</a>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                @endforeach
            </div>
            <!-- portfolio end -->
        </div>
        <div class="sec-lines"></div>
    </section>
    @inclue('pages.partials.contact-section')
</div>
<!-- Content end -->
@endsection
