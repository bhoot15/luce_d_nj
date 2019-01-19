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
                    <h3 class="bold uppercase headerLine">NJ'S LOOKBOOK</h3>
                </div>
            </div>
        </div>
        <!--end of container-->
    </section>

    <section class="bg-light">
        <!--end of row-->
        <div class="container">
            <!--content-1-->
            @foreach($njs as $nj)
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <a href="#">
                            <img alt="Pic" class="mb24 text-center" src="{{$nj->image_url}}"/>
                        </a>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="height"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="#">
                            <h4 class="mb8">{{$nj->name}}</h4>
                        </a>
                        <p class="mb0">
                            {{$nj->description}}
                        </p>
                        <div class="height"></div>
                    </div>
                </div>
                <div class="height"></div>
            @endforeach
        </div>
        <!--end of row-->
    </section>
@endsection
