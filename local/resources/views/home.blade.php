@extends('layouts.app')

@section('content')

    <section class="cats">
        <div class="container" >
            <div class="row justify-content-center">


                    <a href="/cat/2" class="link" id="female">
                        <div id="femalecol" class="col-auto p-3 p-md-5 text-center" style="background: #E19075;">
                        <img class="logo-cat mb-2" src="img/cats/female.png" width="60" height="60" alt="">
                        <h2 class="d-none d-md-block text-uppercase" style="font-size: 1rem;">Женская одежда</h2>
                        </div>
                    </a>


                    <a href="cat/3" class="link" id="child">
                        <div id="childcol" class="col-auto p-3 p-md-5 text-center" style="background: #C46FA8;">
                        <img class="logo-cat mb-2" src="img/cats/child.png" width="60" height="60" alt="">
                        <h2 class="d-none d-md-block text-uppercase" style="font-size: 1rem;">Детская одежда</h2>
                        </div>
                    </a>


                    <a href="cat/1" class="link" id="male">
                        <div id="malecol" class="col-auto p-3 p-md-5 text-center" style="background: #86C4DF;">
                        <img class="logo-cat mb-2" src="img/cats/male.png" width="60" height="60" alt="">
                        <h2 class="d-none d-md-block text-uppercase" style="font-size: 1rem;">Мужская одежда</h2>
                        </div>
                    </a>


            </div>
        </div>
    </section>




    @include('slider')
    <div class="d-md-none">
        @if(Session::get('catId') == 1)
            <img src="/img/slider/male.jpg" class="w-100" alt="">
        @elseif(Session::get('catId') == 2)
            <img src="/img/slider/female.jpg" class="w-100" alt="">
        @elseif(Session::get('catId') == 3)
            <img src="/img/slider/child.jpg" class="w-100" alt="">
        @elseif(Session::get('catId') == 0)
            <img src="/img/slider/female.jpg" class="w-100" alt="">
        @endif
    </div>

    <section id="sectionOfCentersAndBoutics">
        @include('all.center')
        @include('all.boutic')
        <div class="container" id="sectionRightAndLeft">
            <div class="row py-3 justify-content-between">
                <div class="col-5">
                    <div id="ajax-home" class="row">
                        <div class="col-12 py-2"  id="body2" style="border-top-right-radius: 30px; border-bottom-right-radius: 30px; background-color: #C3C4C4;">
                            <a href="" id="centers"><h3>Торговые центры</h3></a>
                        </div>



                    </div>
                </div>
                <div class="col-5 text-right">
                    <div class="row" id="ajax-home2">
                        <div class="col-12 py-2" id="body3" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px; background-color: #C3C4C4;">
                            <a href="" id="boutics"><h3>Магазины</h3></a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
