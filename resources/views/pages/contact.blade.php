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
    <!-- section-->
    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
        <div class="bg par-elem"  data-bg="{{ asset('images/contact.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="pattern-bg"></div>
        <div class="container">
            <div class="section-title">
                <h2>Reach <span>Out </span>To Me</h2>
                <div class="horizonral-subtitle"><span>Contact</span></div>
            </div>
        </div>
        <a href="#sec1" class="custom-scroll-link hero-start-link"><span>Let's Start</span> <i class="fal fa-long-arrow-down"></i></a>
    </section>
    <!-- section end-->
    <!-- section end-->  
    <section data-scrollax-parent="true" id="sec1">
        <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }" >Get in Touch<span>//</span></div>
        <div class="container">
            <!-- contact details --> 
            <div class="fl-wrap  mar-bottom">
                <div class="row">
                    <div class="col-md-3">
                        <div class="pr-title fl-wrap">
                            <h3>Contact  Details</h3>
                            <span>Contact me for any questions or project ideas.</span>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- features-box-container --> 
                        <div class="features-box-container single-serv fl-wrap">
                            <div class="row">
                                <!--features-box --> 
                                <div class="features-box col-md-4">
                                    <div class="time-line-icon">
                                        <i class="fal fa-mobile-android"></i>
                                    </div>
                                    <h3>01. Phone</h3>
                                    <a href="#">+3524696101</a>
                                </div>
                                <!-- features-box end  --> 
                                <!--features-box --> 
                                <div class="features-box col-md-4">
                                    <div class="time-line-icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <h3>02. Email</h3>
                                    <a href="#">jeffrey.davidson@outlook.com</a>
                                </div>
                                <!-- features-box end  --> 
                            </div>
                        </div>
                        <!-- features-box-container end  -->
                    </div>
                </div>
            </div>
            <div class="fl-wrap mar-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="pr-title fl-wrap">
                            <h3>Get In Touch</h3>
                            <span>Submit the contact form and I'll get back to you as soon as possible.</span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div id="contact-form">
                            <div id="message"></div>
                            <form class="custom-form" method="post" action="{{ route('contact.store') }}">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><i class="fal fa-user"></i></label>
                                            <input type="text" name="name" id="name" placeholder="Your Name *" value="" required />
                                            @error('name') 
                                                <span style="color: red;"> {{ $errors->first('name') }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label><i class="fal fa-envelope"></i> </label>
                                            <input type="text"  name="email" id="email" placeholder="Email Address *" value="" required />
                                            @error('email') 
                                                <span style="color: red;"> {{ $errors->first('email') }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label><i class="fal fa-mobile-android"></i> </label>
                                            <input type="text"  name="phone" id="phone" placeholder="Phone *" value="" />
                                            @error('phone') 
                                                <span style="color: red;"> {{ $errors->first('phone') }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <select name="subject" id="subject" data-placeholder="Subject" class="chosen-select sel-dec">
                                                <option>Subject</option>
                                                <option value="order">Order Project</option>
                                                <option value="support">Support</option>
                                                <option value="other">Other Question</option>
                                            </select>
                                            @error('subject') 
                                                <span style="color: red;"> {{ $errors->first('subject') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:" required></textarea>
                                    @error('comments') 
                                        <span style="color: red;">{{ $errors->first('comments') }}</span>
                                    @enderror
                                    <div class="clearfix"></div>
                                    <button type="submit" class="btn float-btn flat-btn color-btn" id="submit">Send Message</button>
                                </fieldset>
                            </form>
                        </div>
                        <!-- contact form  end--> 
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-parallax-module" data-position-top="70"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
        <div class="sec-lines"></div>
    </section>
    <!-- section end-->              
    <!-- section-->
    <section class="dark-bg2 small-padding order-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Find me on social networks : </h3>
                </div>
                <div class="col-md-4">
                    <ul >
                        <li><a href="https://www.facebook.com/jeffreydavidsonwebdev" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/jdavidsonwebdev" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/jeffrey-davidson-8176205a/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
</div>
@endsection