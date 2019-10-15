<!-- header-->
<header class="main-header">
    <a class="logo-holder" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}"  alt="Jeffrey Davidson">
    </a>
    <!-- nav-button-wrap-->
    <div class="nav-button but-hol">
        <span  class="nos"></span>
        <span class="ncs"></span>
        <span class="nbs"></span>
        <div class="menu-button-text">Menu</div>
    </div>
    <!-- nav-button-wrap end-->
    <div class="header-social">
        <ul >
            <li><a href="https://www.facebook.com/jeffreydavidsonwebdev" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/jdavidsonwebdev" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/jeffrey-davidson-8176205a/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
    <!--  showshare -->
    <div class="show-share showshare">
        <i class="fal fa-retweet"></i>
        <span>Share This</span>
    </div>
    <!--  showshare end -->
</header>
<!--  header end -->
<!--  navigation bar -->
<div class="nav-overlay">
    <div class="tooltip color-bg">Close Menu</div>
</div>
<div class="nav-holder">
    <div class="nav-title"><span>Menu</span></div>
    <div class="nav-inner-wrap">
        <nav class="nav-inner sound-nav" id="menu">
            <ul>
                <li><a href="{{ route('home') }}" class="act-link">Home</a></li>
                @if($projectsCount > 0)
                    <li><a href="{{ route('portfolio') }}" class="act-link">Projects</a></li>
                @endif
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<!--  navigation bar end -->
