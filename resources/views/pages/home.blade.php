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
            <li><a class="scroll-link" href="#sec4">Featured Projects</a></li>
            <li><a class="scroll-link" href="#sec5">Recent Posts</a></li>
            <li><a class="scroll-link" href="#sec6">How I Work</a></li>
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

    @widget('Numbers')

    @include('pages.partials.home-resume')

    @widget('FeaturedProjects')

    @widget('RecentPosts')

    @include('pages.partials.home-video-presentation')

    @include('pages.partials.home-workflow')

    @include('pages.partials.contact-section')
</div>
<!-- Content end -->
@endsection
