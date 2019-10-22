<!--section -->
<section  data-scrollax-parent="true" id="sec6">
    <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }" >Testimonials<span>//</span></div>
    <div class="container">
        <div class="section-title fl-wrap">
            <h2>{{ $title }}</h2>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--slider-carousel-wrap -->
    <div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
        <div class="text-carousel-controls fl-wrap">
            <div class="container">
                <div class="sp-cont sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                <div class="sp-cont sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
            </div>
        </div>
        <div class="text-carousel cur_carousel-slider-container fl-wrap">
            @foreach($testimonials as $testimonial)
                <!--slick-item -->
                <div class="slick-item">
                    <div class="text-carousel-item">
                        @if(!empty($testimonial->avatar_path))
                            <div class="popup-avatar">
                                <img src="{{ asset($testimonial->avatar_path) }}" alt="{{ $testimonial->name }}">
                            </div>
                        @endif
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                        <div class="review-owner fl-wrap">{{ $testimonial->name }}  - <span>Happy Client</span></div>
                        {!! $testimonial->body !!}
                    </div>
                </div>
                <!--slick-item end -->
            @endforeach
        </div>
    </div>
    <!--slider-carousel-wrap end-->
    <!-- client-list -->
</section>
<!-- section end -->
