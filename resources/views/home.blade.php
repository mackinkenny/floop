@extends('layouts.app')

@section('content')

    <section class="cats">
        <div class="container">
            <div class="row justify-content-center">
                <div id="sort1" class="col-auto p-3" style="display: none;">
                    <a href="/sort/2" class="btn btn-danger">Брюки</a>
                    <a href="/sort/2" class="btn btn-danger">Брюки</a>
                    <a href="/sort/2" class="btn btn-danger">Брюки</a>
                </div>

                <div id="femalecol" class="col-auto py-5 px-5 text-center" style="background: #E69275;">
                    <a href="/cat/2" class="link" id="female"><img src="img/cats/female.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Женская одежда</h2>
                    </a>
                </div>
                <div id="childcol" class="col-auto py-5 px-5 text-center" style="background: #C69DB9;">
                    <a href="cat/3" class="link" id="child"><img src="img/cats/child.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Детская одежда</h2>
                    </a>
                </div>
                <div id="malecol" class="col-auto py-5 px-5 text-center" style="background: #86C4DF;">
                    <a href="cat/1" class="link" id="male"><img src="img/cats/male.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Мужская одежда</h2>
                    </a>
                </div>
                <div id="sort2" class="col-auto p-3" style="display: none;">
                    <a href="/sort/2" class="btn btn-danger">Брюки</a>
                    <a href="/sort/2" class="btn btn-danger">Брюки</a>
                    <a href="/sort/2" class="btn btn-danger">Брюки</a>
                </div>
            </div>
        </div>
    </section>




    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 300px;">
                <img class="d-block w-100" src="img/slider/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item" style="height: 300px;">
                <img class="d-block w-100" src="img/slider/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item" style="height: 300px;">
                <img class="d-block w-100" src="img/slider/3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item" style="height: 300px;">
                <img class="img-responsive d-block w-100" src="img/slider/5.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="">
        <div class="bg-light container">
            <div class="row py-3 justify-content-between">
                <div class="col-5">
                    <div id="ajax-home" class="row">
                        <div class="col-12 py-2"  id="body2" style="border-top-right-radius: 30px; border-bottom-right-radius: 30px;">
                            <h3>Торговые центры</h3>
                        </div>

                        <div id="ajax-home" class="row">

                        </div>


                    </div>
                </div>
                <div class="col-5 text-right">
                    <div class="row" id="ajax-home2">
                        <div class="col-12 py-2" id="body3" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px;">
                            <h3>Магазины</h3>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--<section class="py-2">--}}
        {{--<div class="container card bg-secondary text-light">--}}
            {{--<div class="row card-header">--}}
                {{--<div class="col d-flex flex-row">--}}
                    {{--<h3>Торговые центры</h3>--}}
                    {{--<div class="rounded-circle bg-light px-2 py-1 mx-5">--}}
                        {{--<img src="img/straights/down.png" width="23" height="11" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col d-flex flex-row-reverse">--}}
                    {{--<h3>Магазины</h3>--}}
                    {{--<div class="rounded-circle bg-light px-2 py-1 mx-5">--}}
                        {{--<img src="img/straights/down.png" width="23" height="11" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row card-body">--}}

                {{--<div class="col">--}}
                    {{--<div class="row">--}}

                        {{--@foreach($centers as $center)--}}

                            {{--<div class="col-12 mb-4">--}}
                                {{--<a href="/center/{{ $center->id }}">--}}
                                    {{--<div class="card bg-dark text-white">--}}
                                        {{--<img class="card-img" src="img/centers/park.jpg" height="60" alt="Card image">--}}
                                        {{--<div class="card-img-overlay text-center">--}}
                                            {{--<h4 class="card-title">{{ $center->name }}</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<div class="row">--}}
                        {{--@foreach($boutics as $boutic)--}}

                            {{--<div class="col-12 mb-4">--}}
                                {{--<a href="/profile/{{ $boutic->user_id }}">--}}
                                    {{--<div class="card bg-dark text-white">--}}
                                        {{--<img class="card-img" src="img/centers/park.jpg" height="60" alt="Card image">--}}
                                        {{--<div class="card-img-overlay text-center">--}}
                                            {{--<h4 class="card-title">{{ $boutic->name }}</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection
