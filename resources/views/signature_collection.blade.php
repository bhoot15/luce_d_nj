@extends('layouts.parent')

@section('content')
<section class="bg-light">
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
        <div class="row mb64 mb-xs-24">
            <div class="col-md-8 col-md-offset-2 text-center">
                <a href="#">
                    <h3 class="uppercase bold">Signature Collection</h3>
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
@endsection
