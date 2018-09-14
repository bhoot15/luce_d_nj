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
    <style>
        footer {
            background-color: #0c1a1e;
            min-height: 350px;
            font-family: 'Open Sans', sans-serif;
        }

        .footerleft {
            margin-top: 50px;
            padding: 0 36px;
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

        .paddingtop-bottom {
            margin-top: 50px;
        }

        .footer-ul {
            list-style-type: none;
            padding-left: 0px;
            margin-left: 2px;
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

        .heading7 {
            font-size: 21px;
            font-weight: 700;
            color: #d9d6d6;
            margin-bottom: 22px;
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
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <br>
                    <div class="logofooter"><img src="img/misty/logo.jpg" height="200px" width="auto"></div>
                    <br>

                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">ADDRESS</h6>
                    <div class="post">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> LUCE D NJ<br>Dhaka, Bangladesh</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Phone: +880 – 1727 – 521 – 919</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> E-mail : <a target="_top"
                                                                                         href="mailto:info@nexeltinc.com"
                                                                                         style="color: inherit">lightofnj@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">GENERAL LINKS</h6>
                    <ul class="footer-ul">
                        <li><a href="/">HOME</a></li>
                        <li><a href="/signature-collection">SIGNATURE COLLECTION</a></li>
                        <li><a href="/">LIFESTYLE</a></li>
                        <li><a href="/about">ABOUT US</a></li>
                        <li><a href="/">SHOP MY LOOK</a></li>
                        <li><a href="/contacts">CONTACTS</a></li>
                        <li><a href="/work-with-us">WORK WITH US</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">&ensp;</h6>
                    <ul class="footer-ul">
                        <li><a target="_blank" href="https://www.facebook.com/lucednj/"><i
                                    class="ti-facebook" aria-hidden="true"></i> Facebook</a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCeB2E50tZZ651Z8Dg3kiEJA"><i
                                    class="ti-youtube" aria-hidden="true"></i>Youtube</a></li>
                        <li><a target="_blank" href="https://www.instagram.com/lucednj/"><i
                                    class="ti-instagram" aria-hidden="true"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->

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