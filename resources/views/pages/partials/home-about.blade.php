<!-- section-->
<section data-scrollax-parent="true" id="sec2">
    <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }" > <span>//</span>Words About </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="collage-image fl-wrap">
                    <div class="collage-image-title" data-scrollax="properties: { translateY: '150px' }">Jeffrey Davidson.</div>
                    <img src="{{ asset('images/about.jpg') }}" class="respimg" alt="Jeffrey Davidson">
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-about fl-wrap">
                    <h2>Innovative solutions<br>to boost <span> your creative </span>  projects</h2>
                    <p>My name is Jeffrey Davidson, I am originally from Kansas City, KS and currently residing in the Orlando, FL area. I joined the Royal Daddy Diaper Forces, when my wonderful wife gave birth to our beautiful little girl in April 2017. I enjoy spending my free time playing with my daughter, hitting doubles for my softball team, raising pots in Texas Hold’em, and planning our next big vacation.</p>
                    <p>When I am not spending time with my family, I am actively researching trending industry topics or investing time in personal development projects. I am always looking to stay up on industry standards and improve my skill set to continue to grow as a developer and expand a little in design.</p>
                    <!-- features-box-container -->
                    <div class="features-box-container fl-wrap">
                        <div class="row">
                            <!--features-box -->
                            <div class="features-box col-md-6">
                                <div class="time-line-icon">
                                    <i class="fas fa-server"></i>
                                </div>
                                <h3>Back-End Development</h3>
                                <p>I can work with you to custom build a solution which uses your data to optimise and fulfil your business or operational requirements.</p>
                            </div>
                            <!-- features-box end  -->
                            <!--features-box -->
                            <div class="features-box col-md-6">
                                <div class="time-line-icon">
                                    <i class="fal fa-desktop"></i>
                                </div>
                                <h3>Front-End Development</h3>
                                <p>I can help you plan, design, and build intuitive and interactive web sites and services, to drive your online presence in engaging your customers.</p>
                            </div>
                            <!-- features-box end  -->
                            @if($projectsCount > 0)
                                <a href="{{ route('portfolio') }}" class="btn float-btn flat-btn color-btn">My Portfolio</a>
                            @endif
                        </div>
                    </div>
                    <!-- features-box-container end  -->
                </div>
            </div>
        </div>
    </div>
    <div class="bg-parallax-module" data-position-top="90"  data-position-left="25" data-scrollax="properties: { translateY: '-250px' }"></div>
    <div class="bg-parallax-module" data-position-top="70"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
    <div class="sec-lines"></div>
</section>
<!-- section end-->
