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
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3 class="uppercase">Signature Collection</h3>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/1.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Hanging Ten</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        <a href="#">NJ Misty</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/scarves/2.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Round The Twist</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        <a href="#">NJ Misty</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/3.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Road Trippin'</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        <a href="#">NJ Misty</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection
