@extends('layouts.parent')

@section('content')
    <section class="pb0">
        <div class="nav-container">
            <a id="top"></a>
            @include('layouts.nav')
        </div>

        <div class="container">
            <div class="height"></div>
            <div class="row mb64 mb-xs-24">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                    <h3 class="bold uppercase headerLine">Shop My Look</h3>
                </div>
            </div>
        </div>
        <!--end of container-->
    </section>

    <section class="bg-light">
        <!--end of row-->
        <div class="container">
        @foreach($slooks as $sl)
            <!--content-1-->
                <div class="row text-center">

                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <a href="#">
                            <img alt="Pic" class="mb24 text-center" src="{{$sl->image_url}}"/>
                        </a>
                    </div>
                </div>
                <div class="height"></div>
                <div class="row text-center">
                    <div class="col-sm-3 col-md-3 col-lg-3"></div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <ul class="list-inline mb16">
                            <li>
                                {{$sl->description}}
                            </li>
                            <li>
                                <a href="{{$sl->booking_url}}" target="_blank">
                                    <span class="label">BOOK THIS LOOK</span>
                                </a>
                            </li>
                            <?php if ($sl->promo != "") { ?>
                            <li>
                                Use promo code <span class="label">{{$sl->promo}}</span> for discount.
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3"></div>
                </div>
                <div class="height"></div>
        @endforeach
        <!--content-2-->
        {{--<div class="row text-center">

            <div class="col-sm-12 col-lg-12 col-md-12">
                <a href="#">
                    <img alt="Pic" class="mb24 text-center" src="img/shopmylook/shopmylook_post_2.jpeg"/>
                </a>
            </div>
        </div>
        <div class="height"></div>
        <div class="row text-center">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>

            <div class="col-sm-6 col-md-6 col-lg-6">
                <ul class="list-inline mb16">
                    <li>
                        To shop this Oversized Aviator recreated fashion glass
                    </li>
                    <li>
                        <a href="https://www.noranyc.com" target="_blank">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                    <li>
                        Use promo code <span class="label">NJMISTY</span> for 10% discount.
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
        </div>
        <div class="height"></div>
        <!--content-3-->
        <div class="row text-center">

            <div class="col-sm-12 col-lg-12 col-md-12">
                <a href="#">
                    <img alt="Pic" class="mb24 text-center" src="img/shopmylook/shopmylook_post_3.jpeg"/>
                </a>
            </div>
        </div>
        <div class="height"></div>
        <div class="row text-center">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>

            <div class="col-sm-6 col-md-6 col-lg-6">
                <ul class="list-inline mb16">
                    <li>
                        To get this amazing makeover
                    </li>
                    <li>
                        <a href="https://www.instagram.com/neusalonzindia/?utm_source=ig_profile_share&igshid=1eui3e4d9boub"
                           target="_blank">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
        </div>
        <div class="height"></div>
        <!--content-4-->
        <div class="row text-center">

            <div class="col-sm-12 col-lg-12 col-md-12">
                <a href="#">
                    <img alt="Pic" class="mb24 text-center" src="img/shopmylook/shopmylook_post_4.jpeg"/>
                </a>
            </div>
        </div>
        <div class="height"></div>
        <div class="row text-center">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>

            <div class="col-sm-6 col-md-6 col-lg-6">
                <ul class="list-inline mb16">
                    <li>
                        Shop this budget friendly ethnic look from
                    </li>
                    <li>
                        <a href="https://www.facebook.com/bluedhaka/" target="_blank">
                            <span class="label">Blue Dhaka</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
        </div>
        <div class="height"></div>
        <!--content-5-->
        <div class="row text-center">

            <div class="col-sm-12 col-lg-12 col-md-12">
                <a href="#">
                    <img alt="Pic" class="mb24 text-center" src="img/shopmylook/shopmylook_post_5.jpeg"/>
                </a>
            </div>
        </div>
        <div class="height"></div>
        <div class="row text-center">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>

            <div class="col-sm-6 col-md-6 col-lg-6">
                <ul class="list-inline mb16">
                    <li>
                        Shop this amazing statement party jacket from
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj" target="_blank">
                            <span class="label">Luce d NJ</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
        </div>
        <div class="height"></div>


    </div>--}}
        <!--end of row-->
    </section>
@endsection
