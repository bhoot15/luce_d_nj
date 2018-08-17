@extends('layouts.app')

@section('content')
<section class="bg-secondary">
    <div class="container">
        <div class="row mb64 mb-xs-24">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3>BEAUTY</h3>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/home4.jpg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Hanging Ten</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>September 25, 2011</li>
                    <li>
                        <a href="#">Craig Garner</a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Lifestyle</span>
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
                    <img alt="Pic" class="mb24" src="img/home5.jpg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Round The Twist</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>September 21, 2011</li>
                    <li>
                        <a href="#">Craig Garner</a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Nostalgia</span>
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
                    <img alt="Pic" class="mb24" src="img/home14.jpg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Road Trippin'</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>September 18, 2011</li>
                    <li>
                        <a href="#">Craig Garner</a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label">Lifestyle</span>
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
<div class="foundry_modal text-center image-bg overlay"
     data-time-delay="3000" <!--data-cookie="signup-form-dismissed"-->>
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
