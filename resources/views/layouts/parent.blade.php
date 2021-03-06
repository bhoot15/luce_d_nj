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
    <link href="css/xubi.css" rel="stylesheet" type="text/css" media="all"/>
    <!--    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>-->
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>

    <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBzYYLRrY3dKHGoEsQxfrfdHfjY4KwKzDE",
            authDomain: "lucednjweb.firebaseapp.com",
            databaseURL: "https://lucednjweb.firebaseio.com",
            projectId: "lucednjweb",
            storageBucket: "",
            messagingSenderId: "972531478654"
        };
        firebase.initializeApp(config);
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127031091-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127031091-1');
    </script>

    <style>
        footer {
            background-color: #0c1a1e;
            min-height: 350px;
            font-family: 'Open Sans', sans-serif;
        }

        .footerHeader {
            color: #fff;
        }

        .logofooter {
            margin-bottom: 10px;
            font-size: 25px;
            color: #fff;
            font-weight: 700;
        }

        .footerleft p {
            color: #fff;
            font-size: 12px !important;
            font-family: 'Open Sans', sans-serif;
            margin-bottom: 15px;
        }

        .footerleft p i {
            width: 20px;
            color: #999;
        }

        .footer-ul li {
            line-height: 29px;
            font-size: 12px;
        }

        .footer-ul li a {
            color: #a0a3a4;
            transition: color 0.2s linear 0s, background 0.2s linear 0s;
        }

        .footer-ul i {
            margin-right: 10px;
        }

        .footer-ul li a:hover {
            transition: color 0.2s linear 0s, background 0.2s linear 0s;
            color: #e1bee7;
        }

        .icon-ul li {
            line-height: 75px;
            width: 100%;
            float: left;
        }

        .copyright {
            min-height: 40px;
            background-color: #000000;
        }

        .copyright p {
            text-align: left;
            color: #FFF;
            padding: 10px 0;
            margin-bottom: 0px;
        }

        .post p {
            font-size: 12px;
            color: #FFF;
            line-height: 20px;
        }

        .post p span {
            display: block;
            color: #8f8f8f;
        }
    </style>

</head>
<body class="scroll-assist">

<div class="main-container">
    <section class="page-title page-title-2 image-bg parallax">
        <div class="background-image-holder">
            <img alt="Background Image" class="background-image" src="img/misty/bg2.png"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6 text-right">

                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    @yield('content')
    <!--footer start from here-->
    <footer>
        <div class="container-fluid text-center">
            <div class="col-md-4">
                <h5 class="uppercase footerHeader bold">Social ECO</h5>
                <br>
                <div class="row text-center">
                    <a href="https://www.instagram.com/lucednj/" target="_blank">
                        <img style="margin: 0 10px 20px;"
                             src="http://aienjamir.com/assets/uploads/2015/10/instagram-light.png"
                             width="42px">
                    </a>
                    <a
                        href="https://www.facebook.com/lucednj/" target="_blank"><img style="margin: 0 10px 20px;"
                                                                                      src="http://aienjamir.com/assets/uploads/2015/10/facebook-light.png"
                                                                                      width="42px">
                    </a>
                    <a
                        href="https://twitter.com/lucednj" target="_blank"><img style="margin: 0 10px 20px;"
                                                                                src="http://aienjamir.com/assets/uploads/2015/10/twitter-light.png"
                                                                                width="42px">
                    </a>
                    <a href="https://snapchat.com/add/lucednj" target="_blank">
                        <img style="margin: 0 10px 20px;"
                             src="http://aienjamir.com/assets/uploads/2015/10/snapchat-light.png"
                             width="42px">
                    </a>
                    <a
                        href="https://www.youtube.com/channel/UCeB2E50tZZ651Z8Dg3kiEJA" target="_blank"><img
                            style="margin: 0 10px 20px;"
                            src="http://aienjamir.com/assets/uploads/2015/10/youtube-light.png" width="42px">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="uppercase footerHeader bold">Search</h5>
                <br>
                <div class="row">
                    <div class="input-with-label text-left">
                        <input type="text"/>
                    </div>
                </div>
                <div class="row">
                    <div class="logofooter"><img src="img/misty/logo.jpg" height="200px" width="auto"></div>
                </div>
                <div class="row">
                    <br>
                    <p style="letter-spacing:3px; font-family: " Oswald", sans-serif, Semibold;">TERMS OF USE /
                    PRIVACY</p>
                    <p style="letter-spacing:3px; font-family: " Oswald", sans-serif,
                    Semibold;">© <?php echo date('Y') ?> - All Rights Reserved by <a href="/">luce d nj</a></p>
                    <p style="letter-spacing: 3px; font-family: " Oswald", sans-serif, Semibold;">website developed by
                    <a href="http://xubi.artefactplus.com">zobair</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="uppercase footerHeader bold">For Advertisements</h5>
                <br>
                <a class="btn btn-white mb32" href="#">info@lucednj.com</a>
            </div>

        </div>
    </footer>

    <!--footer ends from here-->

    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© <?php echo date('Y') ?> - All Rights Reserved by LUCE D NJ</p>
            </div>
        </div>
    </div>

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
<script src="js/xubi.js"></script>
</body>
</html>
