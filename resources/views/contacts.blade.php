@extends('layouts.parent')

@section('content')
<section>
    <div class="nav-container">
        <a id="top"></a>
        @include('layouts.nav')
    </div>

    <div class="container">
        <div class="height"></div>
        <div class="row mb64 mb-xs-24">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3 class="bold uppercase headerLine">Contacts</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <!--<h3 class="uppercase">Get In Touch</h3>-->
                <h4 class="bold uppercase">USE THE FOLLOWING EMAIL(S) TO CONTACT US</h4>
                <hr>
                <h5><b>INQUIRIES: </b><u>info@lucednj.com</u></h5>

                <h5><b>COLLABORATIONS: </b><u>collaborations@lucednj.com</u></h5>

                <h5><b>ADVERTISEMENTS: </b><u>advertisements@lucednj.com</u></h5>

                <h5 class="bold uppercase">OR USE THE FORM HERE TO SEND US YOUR MESSAGE</h5>
                <!--                <h4 class="uppercase">Get expert insights straight to your e-mail</h4>-->
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
