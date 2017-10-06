@extends('layouts.app')

@section('content')

    <section class="cats">
        <div class="container" style="background: #fefefe;">
            <div class="row justify-content-center">

                <div id="femalecol" class="col-auto p-3 p-md-5 text-center" style="background: #E19075;">
                    <a href="/cat/2" class="link" id="female"><img class="logo-cat" src="img/cats/female.png" width="60" height="60" alt="">
                        <h2 class="d-none d-md-block" style="font-size: 1rem;">Женская одежда</h2>
                    </a>
                </div>
                <div id="childcol" class="col-auto p-3 p-md-5 text-center" style="background: #C46FA8;">
                    <a href="cat/3" class="link" id="child"><img class="logo-cat" src="img/cats/child.png" width="60" height="60" alt="">
                        <h2 class="d-none d-md-block" style="font-size: 1rem;">Детская одежда</h2>
                    </a>
                </div>
                <div id="malecol" class="col-auto p-3 p-md-5 text-center" style="background: #27A8E0;">
                    <a href="cat/1" class="link" id="male"><img class="logo-cat" src="img/cats/male.png" width="60" height="60" alt="">
                        <h2 class="d-none d-md-block" style="font-size: 1rem;">Мужская одежда</h2>
                    </a>
                </div>

            </div>
        </div>
    </section>




    @include('slider')

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
