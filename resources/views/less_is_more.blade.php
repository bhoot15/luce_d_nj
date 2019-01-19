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
                    <h3 class="bold uppercase headerLine">Less is More</h3>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                @foreach($lscs as $ls)
                    <div class="col-sm-4">
                        <a href="#">
                            <img alt="Pic" class="mb24" src="{{$ls->image_url}}"/>
                        </a>

                        <h4 class="mb8">{{$ls->title}}</h4>

                        <ul class="list-inline mb16">
                            <li>
                                @ {{$ls->author}}
                            </li>
                            <li>
                                <a href="{{$ls->book_this_look_url}}">
                                    <span class="label">BOOK THIS LOOK</span>
                                </a>
                            </li>
                        </ul>
                        <p class="mb0">
                            {{str_limit($ls->description,230)}}
                        </p>
                        <div class="height"></div>
                        <div class="text-left">
                            <div class="modal-container">
                                <a class="btn btn-sm btn-modal" href="#">
                                    <i class="fa fa-bars"></i>SEE MORE</a>
                                <div class="foundry_modal">
                                    <h4>{{$ls->title}}</h4>
                                    <h6 class="text-lowercase">@ {{$ls->author}}</h6>
                                    <hr>
                                    <p>
                                        {{$ls->description}}
                                    </p>

                                    <p>
                                        * STYLE NO: {{$ls->style_no}} <br>

                                        * READY TO PURCHASE <br>

                                        * TO PURCHASE PLEASE <a href="{{$ls->book_this_look_url}}">
                                            <span class="label">BOOK THIS LOOK</span>
                                        </a> <br><br>
                                        <a
                                            href="{{$ls->buyers_guideline_url}}">
                                            <span class="label">THE BUYER’s GUIDELINE</span>
                                        </a> <br><br>
                                        THIS STYLE IS EXCLUSIVELY AVAILABLE IN ONLY {{$ls->available_pcs}} PIECES FOR
                                        PURCHASE
                                    </p>
                                </div>

                            </div>
                            <!--end modal-->
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="height"></div>
        </div>
        <!--end of container-->
    </section>
@endsection
