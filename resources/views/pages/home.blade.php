@extends('layouts.master')

@section('scroller')
<!-- scroll-nav-wrap-->
<div class="scroll-nav-wrap fl-wrap">
    <div class="scroll-down-wrap">
        <div class="mousey">
            <div class="scroller"></div>
        </div>
        <span>Scroll Down</span>
    </div>
    <nav class="scroll-nav scroll-init">
        <ul>
            <li><a class="scroll-link act-link" href="#sec1">Hero</a></li>
            <li><a class="scroll-link" href="#sec2">About</a></li>
            <li><a class="scroll-link" href="#sec3">Resume</a></li>
            @if($featuredProjects->isNotEmpty())
                <li><a class="scroll-link" href="#sec4">Featured Projects</a></li>
            @endif
            <li><a class="scroll-link" href="#sec7">How I Work</a></li>
        </ul>
    </nav>
</div>
<!-- scroll-nav-wrap end-->
@endsection

@section('hero')
@include('pages.partials.home-hero')
@endsection

@section('content')
<!-- Content-->
<div class="content">

    @include('pages.partials.home-about')

    @include('pages.partials.home-numbers')

    @include('pages.partials.home-resume')

    @if($featuredProjects->isNotEmpty())
        @include('pages.partials.home-featured-projects')
    @else
        @include('pages.partials.home-video-presentation')
    @endif

    @include('pages.partials.home-workflow')

    @include('pages.partials.contact-section')
</div>
<!-- Content end -->
@endsection
