<div class="blog-sidebar fl-wrap fixed-bar">
    <!-- widget-wrap -->
    <div class="widget-wrap fl-wrap">
        <h4 class="widget-title"><span>01.</span> About Author</h4>
        <div class="widget-container fl-wrap">
            <div class="about-widget fl-wrap">
                <img src="{{ asset('images/blog-about.jpg') }}" alt="Jeffrey Davidson">
                <h5><a href="#">Jeffrey Davidson</a></h5>
                <div class="clearfix"></div>
                <p>I am originally from Kansas City, KS and currently residing in the Orlando, FL area. I joined the Royal Daddy Diaper Forces, when my wonderful wife gave birth to our beautiful little girl in April 2017. I enjoy spending my free time playing with my daughter, hitting doubles for my softball team, raising pots in Texas Hold’em, and planning our next big vacation.</p>
                <div class="about-widget-social fl-wrap">
                    <span>Find on : </span>
                    <ul>
                        <li><a href="https://www.facebook.com/jeffreydavidsonwebdev" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/jdavidsonwebdev" target="_blank">Twitter</a></li>
                        <li><a href="https://www.linkedin.com/in/jeffrey-davidson-8176205a/" target="_blank">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- widget-wrap end  -->
    @widget('LatestPosts')
    @widget('PostTags')  
    @widget('PostCategories')                                                                                                                                                                                                                           
</div>