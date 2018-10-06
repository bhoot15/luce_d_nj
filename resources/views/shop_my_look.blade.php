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
<section class="pt40 pb0">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="image-tile inner-title title-center text-center">
                    <a href="#">
                        <img alt="Pic" src="img/home5.jpg"/>
                        <div class="title">
                            <h4 class="uppercase mb0">#SHOPTHISLOOK</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="image-tile inner-title title-center text-center">
                    <a href="#">
                        <img alt="Pic"
                             src="https://images.unsplash.com/photo-1439789246184-86fd68529829?q=80&fm=jpg&s=9b5281bedc9e4ce2e40216c99715f5e5"/>
                        <div class="title">
                            <h4 class="uppercase mb0">#shopthislook</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="height"></div>
</section>
@endsection
