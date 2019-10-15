<!--section -->
<section class="dark-bg" id="sec4">
    <div class="fet_pr-carousel-title">
        <div class="fet_pr-carousel-title-item">
            <h3>My Featured Projects</h3>
            <a href="{{ route('portfolio') }}" class="btn float-btn flat-btn color-btn mar-top">My Portfolio</a>
        </div>
    </div>
    <!--slider-carousel-wrap -->
    <div class="slider-carousel-wrap fl-wrap">
        <!--fet_pr-carousel -->
        <div class="fet_pr-carousel cur_carousel-slider-container fl-wrap">
            @foreach($featuredProjects as $project)
                <!--slick-item -->
                <div class="slick-item">
                    <div class="fet_pr-carousel-box">
                        <div class="fet_pr-carousel-box-media fl-wrap">
                            <img src="{{ asset($project->slider->path) }}" class="respimg" alt="{{ $project->name }}">
                            <a href="{{ asset($project->slider->path) }}" class="fet_pr-carousel-box-media-zoom image-popup">
                                <i class="fal fa-search"></i>
                            </a>
                        </div>
                        <div class="fet_pr-carousel-box-text fl-wrap">
                            <h3><a href="{{ route('project', $project->slug) }}">{{ $project->name }}</a></h3>
                        </div>
                    </div>
                </div>
                <!--slick-item end -->
            @endforeach
        </div>
        <!--fet_pr-carousel end -->
        @if($featuredProjects->count() > 1)
            <div class="sp-cont sp-arr sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
            <div class="sp-cont sp-arr sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
        @endif
    </div>
    <!--slider-carousel-wrap end-->
    <div class="fet_pr-carousel-counter"></div>
</section>
<!-- section end -->
