<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>luce d nj</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-gunmetal.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
</head>
<body class="scroll-assist">
<div class="nav-container">
    <a id="top"></a>
    <nav class="nav-centered absolute transparent">
        <!--<div class="text-center">
            <a href="index.html">
                <img class="logo logo-light" alt="Foundry" src="img/logo-light.png" />
                <img class="logo logo-dark" alt="Foundry" src="img/logo-dark.png" />
            </a>
        </div>-->
        <div class="nav-bar text-center">
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group text-left">
                <div class="module left">
                    <ul class="menu">
                        <li class="fa-li">
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="fa-li">
                            <a href="/">
                                Signature Collection
                            </a>
                        </li>
                        <li class="fa-li">
                            <a href="/">
                                Lifestyle
                            </a>
                        </li>
                        <li class="fa-li">
                            <a href="/">
                                About Us
                            </a>
                        </li>
                        <li class="fa-li">
                            <a href="/">
                                Shop My Look
                            </a>
                        </li>
                        <li class="fa-li">
                            <a href="/">
                                Contacts
                            </a>
                        </li>
                        <li class="fa-li">
                            <a href="/">
                                Work With Us
                            </a>
                        </li>
                    </ul>
                </div>
                <!--end of menu module-->
            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>

<div class="main-container">
    <section class="fullscreen image-bg parallax">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/misty/logo_big.png" />
        </div>
        <div class="container v-align-transform">
            <div class="row">
                <div class="col-sm-8 col-md-6 mb24">
                    <h6 class="uppercase"></h6>
                </div>
                <div class="col-sm-12">
                    <div class="modal-container pull-left">
                        <div class="play-button btn-modal inline"></div>
                        <div class="foundry_modal no-bg">

                        </div>
                    </div>
                    <!--end of modal video-->
                    <p class="lead inline-block p32 p0-xs pt8">

                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    @yield('content')
    <footer class="footer-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h6 class="title">LUCE D NJ</h6>
                    <hr>
                    <img alt="Logo" class="logo" src="img/misty/logo.jpg" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Recent Posts</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="#">Hugging pugs is super trendy</a>
                                <span class="date">February
                                            <span class="number">14, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Spinning vinyl is oh so cool</a>
                                <span class="date">February
                                            <span class="number">9, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Superior theme design by pros</a>
                                <span class="date">January
                                            <span class="number">27, 2015</span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Latest Updates</h6>
                        <hr>
                        <div class="twitter-feed">
                            <div class="tweets-feed" data-feed-name="mrareweb">
                            </div>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Instagram</h6>
                        <hr>
                        <div class="instafeed" data-user-name="mrareweb">
                            <ul></ul>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub">&copy; Copyright 2016 - Medium Rare</span>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline social-list">
                        <li>
                            <a href="#">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-vimeo-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of container-->
        <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flickr.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/twitterfetcher.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
