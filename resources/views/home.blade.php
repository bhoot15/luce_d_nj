@extends('layouts.app')

@section('content')
    <!--njs lookbook-->
    <section class="bg-light">
        <div class="nav-container">
            <a id="top"></a>
            @include('layouts.nav')
        </div>

        <section class="bg-light image-square">
            <div class="container">
                <div class="row mb64 mb-xs-24">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h3 class="bold uppercase headerLine">NJ's Lookbook</h3>
                    </div>
                </div>
                <!--end of row-->
                <div class="row v-align-children">
                    <div class="col-md-5 col-sm-6 text-center mb-xs-24">
                        @foreach($hnj as $hnjs)
                            <img class="cast-shadow" alt="Screenshot" src="{{$hnjs->large_image_url}}"/>
                        @endforeach
                    </div>
                    <div class="col-md-6 col-md-offset-1 col-sm-5 col-sm-offset-1">
                        <div class="row">
                            <h3 class="uppercase bold">{{$hnjs->name}}</h3>
                            <p>
                                {{$hnjs->description}}
                            </p>
                        </div>
                        <div class="row">
                            <div class="logo-carousel">
                                <ul class="slides">
                                    @foreach($njs as $nj)
                                        <li>
                                            <a href="/njs-lookbook">
                                                <img alt="Logo" src="{{$nj->image_url}}"/>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--end of logo slider-->
                        </div>
                        <!--end of row-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>

    </section>
    <!--signature collection-->
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
                            <img class="image-border" alt="Pic" src="img/less_is_more/cherry_tomato.jpeg"/>
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
    <!--instagram njmisty-->
    <section class="bg-light">
        <!--    instagram content here-->
        <div class="container">

            <div id="myCarousel" class="row carousel slide" data-ride="carousel">
                <div class="row mb64 mb-xs-24">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h3 class="bold uppercase headerLine">Instagram</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <h5 class="title">@njmisty</h5>
                </div>
                <!-- Wrapper for slides  -->
                <div class="carousel-inner">
                    <div class="item active">
                        <ul class="thumbnails">
                            @foreach($nj_insta1 as $li)
                                <li class="col-sm-4">
                                    <blockquote class="instagram-media"
                                                data-instgrm-permalink="{{$li->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                data-instgrm-version="12"
                                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                        <div style="padding:16px;"><a
                                                href="{{$li->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                                target="_blank">
                                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                    <div
                                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                    </div>
                                                </div>
                                                <div style="padding: 19% 0;"></div>
                                                <div
                                                    style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                    <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                         xmlns=""
                                                    >
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <g transform="translate(-511.000000, -20.000000)"
                                                               fill="#000000">
                                                                <g>
                                                                    <path
                                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div style="padding-top: 8px;">
                                                    <div
                                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                        View this post on Instagram
                                                    </div>
                                                </div>
                                                <div style="padding: 12.5% 0;"></div>
                                                <div
                                                    style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                    <div>
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                        <div
                                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                    </div>
                                                    <div style="margin-left: 8px;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                        <div
                                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                    </div>
                                                    <div style="margin-left: auto;">
                                                        <div
                                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                        <div
                                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                                </div>
                                            </a>
                                            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                                <a href="https://www.instagram.com/p/Bn-5kTABFoW/?utm_source=ig_embed&amp;utm_medium=loading"
                                                   style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                   target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                                <time
                                                    style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                    datetime="2018-09-21T09:16:34+00:00">Sep 21, 2018 at 2:16am PDT
                                                </time>
                                            </p>
                                        </div>
                                    </blockquote>
                                    <script async defer src="https://www.instagram.com/embed.js"></script>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @if(sizeof($nj_insta2)!=0)
                        <div class="item">
                            <ul class="thumbnails">
                                @foreach($nj_insta2 as $li2)
                                    <li class="col-sm-4">
                                        <blockquote class="instagram-media"
                                                    data-instgrm-permalink="{{$li2->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    data-instgrm-version="12"
                                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:16px;"><a
                                                    {{$li2->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                                    target="_blank">
                                                    <div
                                                        style=" display: flex; flex-direction: row; align-items: center;">
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                        <div
                                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 19% 0;"></div>
                                                    <div
                                                        style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                        <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                             version="1.1"
                                                             xmlns=""
                                                        >
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-511.000000, -20.000000)"
                                                                   fill="#000000">
                                                                    <g>
                                                                        <path
                                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div style="padding-top: 8px;">
                                                        <div
                                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                            View this post on Instagram
                                                        </div>
                                                    </div>
                                                    <div style="padding: 12.5% 0;"></div>
                                                    <div
                                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                        <div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                        </div>
                                                        <div style="margin-left: 8px;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                        </div>
                                                        <div style="margin-left: auto;">
                                                            <div
                                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                                    </div>
                                                </a>
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                                    <a href="https://www.instagram.com/p/BnYxnmRnlgg/?utm_source=ig_embed&amp;utm_medium=loading"
                                                       style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                       target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                                    <time
                                                        style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                        datetime="2018-09-06T13:55:58+00:00">Sep 6, 2018 at 6:55am PDT
                                                    </time>
                                                </p>
                                            </div>
                                        </blockquote>
                                        <script async defer src="http://www.instagram.com/embed.js"></script>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(sizeof($nj_insta3)!=0)
                        <div class="item">
                            <ul class="thumbnails">
                                @foreach($nj_insta3 as $li3)
                                    <li class="col-sm-4">
                                        <blockquote class="instagram-media"
                                                    data-instgrm-permalink="{{$li3->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    data-instgrm-version="12"
                                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:16px;"><a
                                                    {{$li3->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                                    target="_blank">
                                                    <div
                                                        style=" display: flex; flex-direction: row; align-items: center;">
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                        <div
                                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 19% 0;"></div>
                                                    <div
                                                        style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                        <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                             version="1.1"
                                                             xmlns=""
                                                        >
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-511.000000, -20.000000)"
                                                                   fill="#000000">
                                                                    <g>
                                                                        <path
                                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div style="padding-top: 8px;">
                                                        <div
                                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                            View this post on Instagram
                                                        </div>
                                                    </div>
                                                    <div style="padding: 12.5% 0;"></div>
                                                    <div
                                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                        <div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                        </div>
                                                        <div style="margin-left: 8px;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                        </div>
                                                        <div style="margin-left: auto;">
                                                            <div
                                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                                    </div>
                                                </a>
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                                    <a href="https://www.instagram.com/p/BnYxnmRnlgg/?utm_source=ig_embed&amp;utm_medium=loading"
                                                       style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                       target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                                    <time
                                                        style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                        datetime="2018-09-06T13:55:58+00:00">Sep 6, 2018 at 6:55am PDT
                                                    </time>
                                                </p>
                                            </div>
                                        </blockquote>
                                        <script async defer src="http://www.instagram.com/embed.js"></script>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div><!-- /Wrapper for slides .carousel-inner -->

                <!-- Control box -->
                <div class="control-box">
                    <a data-slide="prev" href="#myCarousel" class="carousel-control left a">‹</a>
                    <a data-slide="next" href="#myCarousel" class="carousel-control right a">›</a>
                </div><!-- /.control-box -->

            </div><!-- /#myCarousel -->
        </div>
        <!--    end of row-->
    </section>
    <!--vlogs-->
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
                @foreach($vlogs as $vlog)
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="instafeed grid-gallery text-center" data-user-name="mrareweb">
                            <iframe width="100%" height="400px" src="{{$vlog->video_url}}"
                                    frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
                {{--<div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="instafeed grid-gallery text-center" data-user-name="mrareweb">
                        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/HUvaAgLMpto"
                                frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--light of fashion-->
    <section class="bg-light">
        <div class="row mb64 mb-xs-24">
            <div class="col-md-8 col-md-offset-2 text-center">
                <a href="#">
                    <h3 class="uppercase  mb16 bold headerLine">Light of Fashion</h3>
                </a>
                <div class="height"></div>
                <!--                <h6 class="uppercase">Subscribe Us For Updates</h6>-->
                <div class="tabbed-content button-tabs">
                    <ul class="tabs">
                        <li class="active">
                            <div class="tab-title">
                                <span>It Fixes</span>
                            </div>
                            <div class="tab-content text-center">
                                <div class="row">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <?php $val = 1;?>
                                            @foreach($ifs as $if)

                                                <div <?if($val == 1){ ?> class="item active"
                                                     <?php } else { ?> class="item" <?php } ?>>
                                                    <?$val++;?>
                                                    <img alt="Image" src="{{$if->image_url}}"/>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Controls -->
                                        <a class="a left carousel-control" href="#carousel-example-generic"
                                           data-slide="prev">
                                            ‹ </a>
                                        <a class="a right carousel-control" href="#carousel-example-generic"
                                           data-slide="next"> › </a>
                                    </div><!-- /carousel -->
                                </div>
                                <!--end of row-->
                            </div>
                        </li>
                        <li>
                            <div class="tab-title">
                                <span>It Influences</span>
                            </div>
                            <div class="tab-content">
                                <div class="row">
                                    <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <?php $val1 = 1;?>
                                            @foreach($iis as $ii)

                                                <div <?if($val1 == 1){ ?> class="item active"
                                                     <?php } else { ?> class="item" <?php } ?>>
                                                    <?$val1++;?>
                                                    <img alt="Image" src="{{$ii->image_url}}"/>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Controls -->
                                        <a class="a left carousel-control" href="#carousel-example-generic2"
                                           data-slide="prev">
                                            ‹ </a>
                                        <a class="a right carousel-control" href="#carousel-example-generic2"
                                           data-slide="next"> › </a>
                                    </div><!-- /carousel -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tab-title">
                                <span>It Orients</span>
                            </div>
                            <div class="tab-content">
                                <div class="row">
                                    <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <?php $val2 = 1;?>
                                            @foreach($ios as $io)

                                                <div <?if($val2 == 1){ ?> class="item active"
                                                     <?php } else { ?> class="item" <?php } ?>>
                                                    <?$val2++;?>
                                                    <img alt="Image" src="{{$io->image_url}}"/>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Controls -->
                                        <a class="a left carousel-control" href="#carousel-example-generic3"
                                           data-slide="prev">
                                            ‹ </a>
                                        <a class="a right carousel-control" href="#carousel-example-generic3"
                                           data-slide="next"> › </a>
                                    </div><!-- /carousel -->
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--end of button tabs-->
            </div>
        </div>
        <div class="row">

        </div>
        <!--end of row-->
    </section>
    <!--instagram luce d nj-->
    <section class="bg-secondary">
        <div class="container">
            <div class="row mb64 mb-xs-24">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                    <h3 class="uppercase  mb16 bold">INSTAGRAM</h3>
                </div>
            </div>
            <div id="carousel-example" class="carousel slide team team-web-view" data-ride="carousel">
                <div class="row text-center">
                    <h5 class="title">@lucednj</h5>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                        <ul class="thumbnails">
                            @foreach($lc_insta1 as $li)
                                <li class="col-sm-4">
                                    <blockquote class="instagram-media"
                                                data-instgrm-permalink="{{$li->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                data-instgrm-version="12"
                                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                        <div style="padding:16px;"><a
                                                href="{{$li->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                                target="_blank">
                                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                    <div
                                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                    </div>
                                                </div>
                                                <div style="padding: 19% 0;"></div>
                                                <div
                                                    style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                    <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                         xmlns=""
                                                    >
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <g transform="translate(-511.000000, -20.000000)"
                                                               fill="#000000">
                                                                <g>
                                                                    <path
                                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div style="padding-top: 8px;">
                                                    <div
                                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                        View this post on Instagram
                                                    </div>
                                                </div>
                                                <div style="padding: 12.5% 0;"></div>
                                                <div
                                                    style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                    <div>
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                        <div
                                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                    </div>
                                                    <div style="margin-left: 8px;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                        <div
                                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                    </div>
                                                    <div style="margin-left: auto;">
                                                        <div
                                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                        <div
                                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                                </div>
                                            </a>
                                            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                                <a href="https://www.instagram.com/p/Bn-5kTABFoW/?utm_source=ig_embed&amp;utm_medium=loading"
                                                   style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                   target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                                <time
                                                    style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                    datetime="2018-09-21T09:16:34+00:00">Sep 21, 2018 at 2:16am PDT
                                                </time>
                                            </p>
                                        </div>
                                    </blockquote>
                                    <script async defer src="https://www.instagram.com/embed.js"></script>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @if(sizeof($lc_insta2)!=0)
                        <div class="item">
                            <ul class="thumbnails">
                                @foreach($lc_insta2 as $li2)
                                    <li class="col-sm-4">
                                        <blockquote class="instagram-media"
                                                    data-instgrm-permalink="{{$li2->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    data-instgrm-version="12"
                                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:16px;"><a
                                                    {{$li2->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                                    target="_blank">
                                                    <div
                                                        style=" display: flex; flex-direction: row; align-items: center;">
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                        <div
                                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 19% 0;"></div>
                                                    <div
                                                        style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                        <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                             version="1.1"
                                                             xmlns=""
                                                        >
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-511.000000, -20.000000)"
                                                                   fill="#000000">
                                                                    <g>
                                                                        <path
                                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div style="padding-top: 8px;">
                                                        <div
                                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                            View this post on Instagram
                                                        </div>
                                                    </div>
                                                    <div style="padding: 12.5% 0;"></div>
                                                    <div
                                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                        <div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                        </div>
                                                        <div style="margin-left: 8px;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                        </div>
                                                        <div style="margin-left: auto;">
                                                            <div
                                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                                    </div>
                                                </a>
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                                    <a href="https://www.instagram.com/p/BnYxnmRnlgg/?utm_source=ig_embed&amp;utm_medium=loading"
                                                       style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                       target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                                    <time
                                                        style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                        datetime="2018-09-06T13:55:58+00:00">Sep 6, 2018 at 6:55am PDT
                                                    </time>
                                                </p>
                                            </div>
                                        </blockquote>
                                        <script async defer src="http://www.instagram.com/embed.js"></script>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(sizeof($lc_insta3)!=0)
                        <div class="item">
                            <ul class="thumbnails">
                                @foreach($lc_insta3 as $li3)
                                    <li class="col-sm-4">
                                        <blockquote class="instagram-media"
                                                    data-instgrm-permalink="{{$li3->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    data-instgrm-version="12"
                                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                            <div style="padding:16px;"><a
                                                    {{$li3->insta_content}}?utm_source=ig_embed&amp;utm_medium=loading"
                                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                                    target="_blank">
                                                    <div
                                                        style=" display: flex; flex-direction: row; align-items: center;">
                                                        <div
                                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                        <div
                                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 19% 0;"></div>
                                                    <div
                                                        style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                        <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                             version="1.1"
                                                             xmlns=""
                                                        >
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-511.000000, -20.000000)"
                                                                   fill="#000000">
                                                                    <g>
                                                                        <path
                                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div style="padding-top: 8px;">
                                                        <div
                                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                            View this post on Instagram
                                                        </div>
                                                    </div>
                                                    <div style="padding: 12.5% 0;"></div>
                                                    <div
                                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                        <div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                            <div
                                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                        </div>
                                                        <div style="margin-left: 8px;">
                                                            <div
                                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                        </div>
                                                        <div style="margin-left: auto;">
                                                            <div
                                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                            <div
                                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                            <div
                                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                        <div
                                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                                    </div>
                                                </a>
                                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                                    <a href="https://www.instagram.com/p/BnYxnmRnlgg/?utm_source=ig_embed&amp;utm_medium=loading"
                                                       style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                       target="_blank">A post shared by N. J. Misty (@njmisty)</a> on
                                                    <time
                                                        style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                                        datetime="2018-09-06T13:55:58+00:00">Sep 6, 2018 at 6:55am PDT
                                                    </time>
                                                </p>
                                            </div>
                                        </blockquote>
                                        <script async defer src="http://www.instagram.com/embed.js"></script>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div><!-- /Wrapper for slides .carousel-inner -->
                <div class="carousel-line">
                    <div class="controls pull-right">
                        <a class="carousel-control left a" href="#carousel-example" data-slide="prev"> ‹ </a>
                        <a class="carousel-control right a" href="#carousel-example" data-slide="next"> › </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="foundry_modal text-center image-bg overlay"
             data-time-delay="10000" {{--data-cookie="signup-form-dismissed"--}}>
            <div class="background-image-holder">
                <img alt="Background" class="background-image" src="img/capital-t-5.jpg"/>
            </div>
            <h3 class="uppercase bold italic">DON'T MISS OUT!</h3>
            <h6 class="uppercase">SIGN UP HERE TO RECEIVE OUR EXCLUSIVE CONTENT & PROMOS!</h6>
            <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly."
                  data-error="Please fill all fields correctly.">
                <input type="text" class="validate-required" name="name" placeholder="Your Name"/>
                <input type="text" class="validate-required validate-email" name="email"
                       placeholder="Email Address"/>
                <textarea class="validate-required" name="message" rows="4" placeholder="Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
@endsection

