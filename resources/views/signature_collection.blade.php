@extends('layouts.parent')

@section('content')
<section class="bg-light">
    <div class="nav-container">
        <a id="top"></a>
        @include('layouts.nav')
    </div>
    <div class="container">
        <div class="height"></div>
        <div class="row mb64 mb-xs-24">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3 class="bold uppercase headerLine">Signature Collection</h3>
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
@endsection
