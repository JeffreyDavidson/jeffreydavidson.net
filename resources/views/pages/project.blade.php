@extends('layouts.master')

@section('content')
<div class="content">
    <div class="single-page-decor"></div>
    <div class="single-page-fixed-row">
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down</span>
        </div>
        <a href="{{ route('home') }}" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span>Back to home</span></a>
    </div>
    <!-- section  -->
    <section class="no-padding dark-bg no-hidden">
        <!-- show-case-slider-wrap-->
        <div class="show-case-slider-wrap slider-carousel-wrap show-case-slider-wrap-style2">
            <div class="sp-cont sarr-contr sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
            <div class="sp-cont sarr-contr sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
            <div class="show-case-slider cur_carousel-slider-container lightgallery fl-wrap full-height" data-slick='{"centerMode": true}'>
                @foreach($project->images as $image)
                    <!-- show-case-item -->
                    <div class="show-case-item" data-curtext="{{ $image->name }}">
                        <div class="show-case-wrapper fl-wrap full-height">
                            <img src="{{ asset($image->path) }}" alt="{{ $image->name }}">
                            <a href="{{ asset($image->path) }}" class="fet_pr-carousel-box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- show-case-slider-wrap end-->
        <div class="single-project-title single-project-title-style-2">
            <h2><span class="caption">{{ $project->thumbnail->name }}</span></h2>
        </div>
    </section>
    <!-- section end-->
    <!-- section-->
    <section data-scrollax-parent="true">
        <div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span>{{ $project->name }}</div>
        <div class="container">
            <!-- det box-->
            <div class="fl-wrap mar-top">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fixed-column l-wrap">
                            <div class="pr-title fl-wrap">
                                <h3>Project Details</h3>
                            </div>
                            <div class="ci-num"><span>01.</span></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="details-wrap fl-wrap">
                            <h3>{{ $project->name }}</h3>
                            <div class="parallax-header"><span>Categories : </span>
                                @foreach($project->categories as $category)
                                    <a href="#">{{ $category->name }}</a>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                            {!! $project->description !!}
                        </div>
                        <div class="pr-list fl-wrap">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <li><span>Date :</span> {{ $project->completed_at->toDateString() }} </li>
                                        @isset($project->client)
                                            <li><span>Client :</span>  {{ $project->client->name }} </li>
                                        @endisset
                                        @if($project->skills->isNotEmpty())
                                            <li><span>Skills :</span> {{ $project->skills->implode('name', ', ') }} </li>
                                        @endif
                                    </ul>
                                </div>
                                @isset($project->client)
                                    <div class="col-md-8">
                                        <div class="fl-wrap pr-list-det">
                                            @if(!empty($project->client->avatar_path))
                                                <div class="popup-avatar">
                                                    <img src="{{ asset($project->client->avatar_path) }}" alt="{{ $project->client->name }}">
                                                </div>
                                            @endif
                                            <h5>Client Review.</h5>
                                            <p>"{{ $project->review }}"</p>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                        </div>
                        <a target="_blank" href="{{ $project->url }}" class="btn float-btn flat-btn color-btn mar-top">View project</a>
                    </div>
                </div>
                <div class="limit-box fl-wrap"></div>
            </div>
            <!-- det box end-->
            @if ($previousProject || $nextProject)
                <div class="content-nav mar-top">
                    <ul>
                        <li>
                            @if ($previousProject)
                                <a href="{{ route('project', $previousProject) }}" class="ln">
                                    <i class="fal fa-arrow-left"></i>
                                    <span class="tooltip">Prev - {{ \Str::limit($previousProject->name, 25) }}</span>
                                </a>
                            @endif
                        </li>

                        <li>
                            <a href="{{ route('portfolio') }}" class="cur-page"><span>All Projects</span></a>
                        </li>

                        <li>
                            @if ($nextProject)
                                <a href="{{ route('project', $nextProject) }}" class="rn">
                                    <i class="fal fa-arrow-right"></i>
                                    <span class="tooltip">Next - {{ \Str::limit($nextProject->name, 25) }}</span>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            @endif
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
@endsection
