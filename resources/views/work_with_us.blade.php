@extends('layouts.parent')

@section('content')
<section>
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
                <h3 class="bold uppercase headerLine">Work with US</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <!--<h3 class="uppercase">Get In Touch</h3>-->
                <h4 class="bold uppercase">WORK WITH US</h4>
                <hr>
                We’re always on the lookout for creative people and fashion enthusiasts to join our team. Whether you’re
                a recent graduate, studying or just share a huge passion in fashion and lifestyle, we’d love to hear
                from you.<br><br>

                <h5><b>Write to us at: </b> <u>info@lucednj.com</u></h5>
                <!--                <h4 class="uppercase">Get expert insights straight to your e-mail</h4>-->
                <h4 class="bold">OR USE THE FORM HERE TO SEND US YOUR MESSAGE</h4>
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly."
                      data-error="Please fill all fields correctly.">
                    <input type="text" class="validate-required" name="name" placeholder="Your Name"/>
                    <input type="text" class="validate-required validate-email" name="email"
                           placeholder="Email Address"/>
                    <textarea class="validate-required" name="message" rows="4" placeholder="Message"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
        <!--end of row-->
    </div>
</section>
@endsection
