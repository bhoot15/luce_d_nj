@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="nav-container">
        <a id="top"></a>
        <nav class="nav-centered absolute transparent hover-underline-menu">
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
                        <ul class="menu align-center">
                            <li class="fa-li">
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/signature-collection">
                                    Signature Collection
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/">
                                    Lifestyle
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/about">
                                    About Us
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/">
                                    Shop My Look
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/contacts">
                                    Contacts
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/work-with-us">
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

    <section>
        <div class="container">
            <div class="row mb80 mb-xs-0 text-center">
                <h3 class="uppercase bold">NJ's LOOKBOOK</h3>
            </div>
            <!--end of row-->
            <div class="row v-align-children">
                <div class="col-md-5 col-sm-6 text-center mb-xs-24">
                    <img class="cast-shadow" alt="Screenshot" src="img/njs/i_gotta_black_heart.jpg"/>
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-5 col-sm-offset-1">
                    <div class="row">
                        <h3 class="uppercase bold">Build a slick, modern site faster than ever</h3>
                        <p>
                            Foundry is your complete design toolkit, built from the ground up to be flexible, extensible
                            and
                            stylish. Building slick, contemporary sites has never been this easy! Foundry is your
                            complete design toolkit, built from the ground up to be flexible, extensible
                            and
                            stylish. Building slick, contemporary sites has never been this easy! Foundry is your
                            complete design toolkit, built from the ground up to be flexible, extensible
                            and
                            stylish. Building slick, contemporary sites has never been this easy!
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="mb32">
                                <img class="cast-shadow" alt="Screenshot" src="img/njs/I AM ASSYMMETRIC.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="mb32">
                                <img class="cast-shadow" alt="Screenshot" src="img/njs/MIX n MATCH punk.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="mb32">
                                <img class="cast-shadow" alt="Screenshot"
                                     src="img/njs/OVERSIZED FRAMES WITH CASUAL KURTI.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="mb32">
                                <img class="cast-shadow" alt="Screenshot"
                                     src="img/njs/NOTHING WRONG ON BEING PURE DESI.jpg"/>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

</section>
<section class="bg-secondary">
    <div class="container">
        <div class="row mb64 mb-xs-24">
            <div class="col-md-8 col-md-offset-2 text-center">
                <a href="#">
                    <h3 class="uppercase  mb16 bold">Signature Collection</h3>
                </a>
                <!--                <h6 class="uppercase">Subscribe Us For Updates</h6>-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="image-tile inner-title title-center text-center">
                    <a href="/less-is-more">
                        <img class="image-border" alt="Pic" src="img/less_is_more/6.jpeg"/>
                        <div class="title">
                            <h4 class="uppercase mb0 btn btn-lg">LESS IS MORE</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="image-tile inner-title title-center text-center">
                    <a href="/luxury-scarves">
                        <img class="image-border" alt="Pic"
                             src="img/scarves/6.jpeg"/>
                        <div class="title">
                            <h4 class="uppercase mb0 btn btn-lg">LUXURY SCARVES</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <!--    instagram content here-->
    <div class="container">

        <div id="myCarousel" class="row carousel slide" data-ride="carousel">
            <div class="row mb64 mb-xs-24">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                    <h3 class="bold uppercase">Instagram</h3>
                </div>
            </div>
            <!-- Wrapper for slides  -->
            <div class="carousel-inner">

                <div class="item active">

                    <ul class="thumbnails">
                        <li class="col-sm-4">
                            <blockquote class="instagram-media"
                                        data-instgrm-permalink="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                        data-instgrm-version="9"
                                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:8px;">
                                    <div
                                        style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                        <div
                                            style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                    </div>
                                    <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                           style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                           target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                        <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                              datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                        </time>
                                    </p>
                                </div>
                            </blockquote>
                            <script async defer src="https://www.instagram.com/embed.js"></script>
                        </li>

                        <li class="col-sm-4">
                            <blockquote class="instagram-media"
                                        data-instgrm-permalink="https://instagram.com/p/BgLcVwsA-2G/?utm_source=ig_embed"
                                        data-instgrm-version="9"
                                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:8px;">
                                    <div
                                        style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                        <div
                                            style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                    </div>
                                    <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                           style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                           target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                        <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                              datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                        </time>
                                    </p>
                                </div>
                            </blockquote>
                            <script async defer src="https://www.instagram.com/embed.js"></script>
                        </li>

                        <li class="col-sm-4">
                            <blockquote class="instagram-media"
                                        data-instgrm-permalink="https://instagram.com/p/BkxRvCqlvmu/?utm_source=ig_embed"
                                        data-instgrm-version="9"
                                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:8px;">
                                    <div
                                        style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                        <div
                                            style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                    </div>
                                    <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                           style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                           target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                        <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                              datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                        </time>
                                    </p>
                                </div>
                            </blockquote>
                            <script async defer src="https://www.instagram.com/embed.js"></script>
                        </li>
                    </ul>
                </div>


                <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-4">
                            <blockquote class="instagram-media"
                                        data-instgrm-permalink="https://instagram.com/p/BdiEe3xAdha/?utm_source=ig_embed"
                                        data-instgrm-version="9"
                                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:8px;">
                                    <div
                                        style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                        <div
                                            style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                    </div>
                                    <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                           style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                           target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                        <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                              datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                        </time>
                                    </p>
                                </div>
                            </blockquote>
                            <script async defer src="http://www.instagram.com/embed.js"></script>
                        </li>
                    </ul>
                </div>

            </div><!-- /Wrapper for slides .carousel-inner -->
            <div class="row mb64 mb-xs-24">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                    <h5 class="bold">@njmisty</h5>
                </div>
            </div>

            <!-- Control box -->
            <div class="control-box">
                <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
            </div><!-- /.control-box -->

        </div><!-- /#myCarousel -->
    </div>
    <!--    end of row-->
</section>

<section class="bg-secondary">
    <div class="container">
        <div class="row mb64 mb-xs-24">
            <div class="col-md-8 col-md-offset-2 text-center">
                <a href="#">
                    <h3 class="uppercase  mb16 bold">VLOGS</h3>
                </a>
                <!--                <h6 class="uppercase">Subscribe Us For Updates</h6>-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="instafeed grid-gallery text-center" data-user-name="mrareweb">
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/TUniKcafl2c" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="instafeed grid-gallery text-center" data-user-name="mrareweb">
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/TUniKcafl2c" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="row mb64 mb-xs-24">
        <div class="col-md-8 col-md-offset-2 text-center">
            <a href="#">
                <h3 class="uppercase  mb16 bold">Light of Fashion</h3>
            </a>
            <!--                <h6 class="uppercase">Subscribe Us For Updates</h6>-->
        </div>
    </div>
    <div class="row">
        <ul class="filters floating cast-shadow mb0">
        </ul>
        <!--<div class="row masonry-loader">
            <div class="col-sm-12 text-center">
                <div class="spinner"></div>
            </div>
        </div>-->
        <div class="row masonry masonryFlyIn">
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/light_of_fashion/lof0.jpg"/>
                        <div class="title">
                            <h5 class="uppercase mb0">Happy Couple</h5>
                            <span>People / Life</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Animals">
                <div class="image-tile inner-title text-center">
                    <a href="#">
                        <img alt="Pic" src="img/light_of_fashion/lof1.jpg"/>
                        <div class="title">
                            <h5 class="uppercase mb0">Lonely Dog</h5>
                            <span>Animals / Art</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/light_of_fashion/lof2.jpg"/>
                        <div class="title">
                            <h5 class="uppercase mb0">Pondering Blonde</h5>
                            <span>People / Life</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Objects">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/light_of_fashion/lof3.jpg"/>
                        <div class="title">
                            <h5 class="uppercase mb0">Vintage Typewriter</h5>
                            <span>Objects / Isolated</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Objects">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/light_of_fashion/lof4.jpg"/>
                        <div class="title">
                            <h5 class="uppercase mb0">Summer Lovin'</h5>
                            <span>Objects / Food</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/light_of_fashion/lof5.jpg"/>
                        <div class="title">
                            <h5 class="uppercase mb0">Thick Fog</h5>
                            <span>People / Life</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end of row-->
</section>
<section class="bg-secondary">
    <div class="container">
        <div class="row mb64 mb-xs-24">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3 class="uppercase  mb16 bold">INSTAGRAM</h3>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide team team-web-view" data-ride="carousel">

            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <blockquote class="instagram-media"
                                            data-instgrm-permalink="https://www.instagram.com/p/BmN-hvzA6KD/?utm_source=ig_embed"
                                            data-instgrm-version="9"
                                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:8px;">
                                        <div
                                            style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                            <div
                                                style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                        </div>
                                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                               style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                               target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                            <time
                                                style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                            </time>
                                        </p>
                                    </div>
                                </blockquote>
                                <script async defer src="https://www.instagram.com/embed.js"></script>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <blockquote class="instagram-media"
                                            data-instgrm-permalink="https://www.instagram.com/p/BlqCWWmj8ug/?utm_source=ig_embed"
                                            data-instgrm-version="9"
                                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:8px;">
                                        <div
                                            style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                            <div
                                                style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                        </div>
                                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                               style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                               target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                            <time
                                                style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                            </time>
                                        </p>
                                    </div>
                                </blockquote>
                                <script async defer src="https://www.instagram.com/embed.js"></script>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <blockquote class="instagram-media"
                                            data-instgrm-permalink="https://www.instagram.com/p/Blc5QGyDwAH/?utm_source=ig_embed"
                                            data-instgrm-version="9"
                                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:8px;">
                                        <div
                                            style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                            <div
                                                style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                        </div>
                                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                               style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                               target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                            <time
                                                style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                            </time>
                                        </p>
                                    </div>
                                </blockquote>

                                <script async defer src="https://www.instagram.com/embed.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <blockquote class="instagram-media"
                                            data-instgrm-permalink="https://www.instagram.com/p/Bj7_R-BFPmr/?utm_source=ig_embed"
                                            data-instgrm-version="9"
                                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:8px;">
                                        <div
                                            style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                            <div
                                                style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                        </div>
                                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                               style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                               target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                            <time
                                                style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                            </time>
                                        </p>
                                    </div>
                                </blockquote>
                                <script async defer src="http://www.instagram.com/embed.js"></script>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <blockquote class="instagram-media"
                                            data-instgrm-permalink="https://www.instagram.com/p/Bkfd_sblxwD/?utm_source=ig_embed"
                                            data-instgrm-version="9"
                                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:8px;">
                                        <div
                                            style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                            <div
                                                style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                        </div>
                                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/BmScTeHnNg8/?utm_source=ig_embed"
                                               style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                               target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                            <time
                                                style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                datetime="2018-08-10T06:22:53+00:00">Aug 9, 2018 at 11:22pm PDT
                                            </time>
                                        </p>
                                    </div>
                                </blockquote>
                                <script async defer src="http://www.instagram.com/embed.js"></script>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb64 mb-xs-24">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                    <h5 class="bold">@lucednj</h5>
                </div>
            </div>
            <div class="carousel-line">
                <div class="controls pull-right">
                    <a class="carousel-control left" href="#carousel-example" data-slide="prev"> ‹ </a>
                    <a class="carousel-control right" href="#carousel-example" data-slide="next"> › </a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
<div class="foundry_modal text-center image-bg overlay"
     data-time-delay="3000" data-cookie="signup-form-dismissed">
    <div class="background-image-holder">
        <img alt="Background" class="background-image" src="img/capital-t-5.jpg"/>
    </div>
    <h3 class="uppercase bold italic">DON'T MISS OUT!</h3>
    <h6 class="uppercase">SIGN UP HERE TO RECEIVE OUR EXCLUSIVE CONTENT & PROMOS!</h6>
    <form class="form-horizontal" method="POST" action="/contact">
        {{ csrf_field() }}
        <input class="validate-required" type="text" id="name" placeholder="Your name" name="name"
               required/>
        <input type="text" class="validate-required validate-email" id="email"
               placeholder="john@example.com" name="email" required/>
        <textarea class="validate-required" rows="4" id="message" placeholder="Type your messages here"
                  name="message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>
