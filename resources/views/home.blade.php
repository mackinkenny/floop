@extends('layouts.app')

@section('content')

    <section class="cats">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto py-5 px-5 text-center d-flex align-items-center justify-content-center" style="background: #E69275;">
                    <a href="" class="link" id="female"><img src="img/cats/female.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Женская одежда</h2>
                    </a>
                </div>
                <div class="col-auto py-5 px-5 text-center d-flex align-items-center justify-content-center" style="background: #C69DB9;">
                    <a href="" class="link" id="child"><img src="img/cats/child.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Детская одежда</h2>
                    </a>
                </div>
                <div class="col-auto py-5 px-5 text-center d-flex align-items-center justify-content-center" style="background: #86C4DF;">
                    <a href="" class="link" id="male"><img src="img/cats/male.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Мужская одежда</h2>
                    </a>
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

    <section class="py-2">
        <div class="container card bg-secondary text-light">
            <div class="row card-header">
                <div class="col d-flex flex-row">
                    <h3>Торговые центры</h3>
                    <div class="rounded-circle bg-light px-2 py-1 mx-5">
                        <img src="img/straights/down.png" width="23" height="11" alt="">
                    </div>
                </div>
                <div class="col d-flex flex-row-reverse">
                    <h3>Магазины</h3>
                    <div class="rounded-circle bg-light px-2 py-1 mx-5">
                        <img src="img/straights/down.png" width="23" height="11" alt="">
                    </div>
                </div>
            </div>
            <div class="row card-body">

                <div class="col">
                    <div class="row">

                        @foreach($centers as $center)

                            <div class="col-12 mb-4">
                                <div class="card bg-dark text-white">
                                    <img class="card-img" src="img/centers/park.jpg" height="60" alt="Card image">
                                    <div class="card-img-overlay text-center">
                                        <h4 class="card-title">{{ $center->name }}</h4>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        @foreach($boutics as $boutic)

                            <div class="col-12 mb-4">
                                <div class="card bg-dark text-white">
                                    <img class="card-img" src="img/centers/park.jpg" height="60" alt="Card image">
                                    <div class="card-img-overlay text-center">
                                        <h4 class="card-title">{{ $boutic->name }}</h4>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
