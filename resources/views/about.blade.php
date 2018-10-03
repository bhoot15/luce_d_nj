@extends('layouts.parent')

@section('content')
<section class="pb0">
    <div class="nav-container">
        <a id="top"></a>
        <nav class="nav-centered absolute transparent hover-underline-menu" data-menu-underline-from-center>
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
                            <li class="has-dropdown">
                                <a href="/signature-collection">
                                    Signature Collection
                                </a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="/less-is-more">Less Is More</a>
                                            </li>
                                            <li>
                                                <a href="/luxury-scarves">LUXURY SCARVES</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
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

    <div class="container">
        <div class="height"></div>
        <div class="row mb64 mb-xs-24">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3 class="bold uppercase headerLine">About US</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img class="img-responsive" src="img/about_us.jpg">
            </div>
            <div class="col-sm-10">

                <p>
                    LuceD NJ. is tied in with making your own identical proclamation. Influencing you to have confidence
                    in yourself and helping individuals setting up their own trends.<br>
                    Whether you're in the search for your own style and beauty inspiration, LuceD NJ attempts to keep
                    you stylishly in the know who, what, where, how, why and why not's, with its compelling melange of
                    content, packed with substance and surprise.<br>
                    LuceD NJ carries the designer, N. J. Misty's clothing from Bangladesh, offering a substantial ready
                    to wear and upcoming street wears or hauté couture. Her work won't just be an attempt to work as a
                    <br>
                    designer but also being an influencer to you to be yourself.<br>
                    LuceD NJ aims to create content and visuals to showcase all the influences and things beautiful in a
                    splendorous way for the readers and viewers to enjoy it truly
                    Whether you want the latest fashion trends or are in lookout for the style and beauty inspiration,
                    you get it here in a majestic way.<br><br>
                </p>
            </div>
        </div>
        <div class="row">
            <p>
                LuceD NJ ís very own, N. J. Misty might be a designer but firstly she's a Style-preneur. From
                starting her online page in Facebook and Instagram called 'Luce D NJ' to live tv appearances, she
                does it all for the love of style and fashion that she has.<br><br>
            </p>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection
