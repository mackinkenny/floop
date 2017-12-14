@extends('layouts.app')
@section('content')
    <section class="cats">
        <div class="container" >
            <div class="row justify-content-center">
                    <a href="/cat/2" class="link" id="female">
                        <div id="femalecol" class="col-auto p-3 p-md-5 text-center" style="background: #E19075;">
                        <img class="logo-cat mb-2" src="img/cats/female.png" width="60" height="60" alt="">
                        {{--<h2 class="d-none d-md-block text-uppercase" style="font-size: 1rem;">Женская одежда</h2>--}}
                        </div>
                    </a>


                    <a href="cat/3" class="link" id="child">
                        <div id="childcol" class="col-auto p-3 p-md-5 text-center" style="background: #C46FA8;">
                        <img class="logo-cat mb-2" src="img/cats/child.png" width="60" height="60" alt="">
                        {{--<h2 class="d-none d-md-block text-uppercase" style="font-size: 1rem;">Детская одежда</h2>--}}
                        </div>
                    </a>


                    <a href="cat/1" class="link" id="male">
                        <div id="malecol" class="col-auto p-3 p-md-5 text-center" style="background: #27a8e1;">
                        <img class="logo-cat mb-2" src="img/cats/male.png" width="60" height="60" alt="">
                        {{--<h2 class="d-none d-md-block text-uppercase" style="font-size: 1rem;">Мужская одежда</h2>--}}
                        </div>
                    </a>


            </div>
        </div>
    </section>




    @include('slider')


    <section id="sectionOfCentersAndBoutics" style="margin-bottom: 54px;">

        <div class="container" id="sectionRightAndLeft">
            <div class="row py-3">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-auto py-2 px-5"  id="body2" style="border-radius: 35px; background-color: #ECECE9;">
                            <span id="centers"><h3>Торговые центры</h3></span>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <div id="ajax-centers" class="row">

                            </div>
                        </div>
                        <div class="col-5">
                            <div id="ajax-centers2" class="row">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




@endsection
