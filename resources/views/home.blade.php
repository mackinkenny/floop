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

                <div id="femalecol" class="col-auto p-1 p-md-5 text-center" style="background: #E69275;">
                    <a href="/cat/2" class="link" id="female"><img src="img/cats/female.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Женская одежда</h2>
                    </a>
                </div>
                <div id="childcol" class="col-auto p-1 p-md-5 text-center" style="background: #C69DB9;">
                    <a href="cat/3" class="link" id="child"><img src="img/cats/child.png" width="60" height="60" alt="">
                        <h2 style="font-size: 1rem;">Детская одежда</h2>
                    </a>
                </div>
                <div id="malecol" class="col-auto p-1 p-md-5 text-center" style="background: #86C4DF;">
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
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
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
            <div class="carousel-item" style="height: 300px;">
                <img class="img-responsive d-block w-100" src="img/slider/6.jpg" alt="Third slide">
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

    <section id="sectionOfCentersAndBoutics">
        @include('all.center')
        @include('all.boutic')
        <div class="container" id="sectionRightAndLeft">
            <div class="row py-3 justify-content-between">
                <div class="col-5">
                    <div id="ajax-home" class="row">
                        <div class="col-12 py-2"  id="body2" style="border-top-right-radius: 30px; border-bottom-right-radius: 30px; background-color: #C5C7C6;">
                            <a href="" id="centers"><h3>Торговые центры</h3></a>
                        </div>



                    </div>
                </div>
                <div class="col-5 text-right">
                    <div class="row" id="ajax-home2">
                        <div class="col-12 py-2" id="body3" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px; background-color: #C5C7C6;">
                            <a href="" id="boutics"><h3>Магазины</h3></a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
