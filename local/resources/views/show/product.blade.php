@extends('layouts.app')

@section('content')

    <div class="row" style="margin-bottom: 60px; margin-right: 0px; margin-left: 0px; margin-top: 20px;">
        <div class="col-12 py-3 bg-gray mb-2 text-light" style="-webkit-box-shadow: 0px 4px 17px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 4px 17px 0px rgba(0,0,0,0.75);
box-shadow: 0px 4px 17px 0px rgba(0,0,0,0.75);">
            <div class="row align-items-center px-3">
                <img src="/uploads/boutic/avatars/{{ $product->boutic->img_path }}" class="rounded-circle col-3 h-100" alt="">
                <h2 class="fs-xs-20 col">{{ $product->boutic->name }}</h2>
            </div>
        </div>
        <div class="col-12 p-0">
            <input type="hidden" value="{{ $i = 0 }}">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">

                    @foreach($product->photos as $img)

                        @if($i == 0)

                            <li data-target="#carouselExampleIndicators" data-slide-to="$i" class="active"></li>

                        @else

                            <li data-target="#carouselExampleIndicators" data-slide-to="$i"></li>

                        @endif
                            <span class="d-none">{{ $i++ }}</span>
                    @endforeach

                </ol>
                <div class="carousel-inner w-100 h-100 mobile-carousel">
                    <input type="hidden" value="{{ $j = 0 }}">

                    @foreach($product->photos as $img)

                        @if($j == 0)

                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/uploads/images/products/{{ $img->img_path }}" alt="First slide">
                            </div>

                        @else

                            <div class="carousel-item">
                                <img class="d-block w-100" src="/uploads/images/products/{{ $img->img_path }}" alt="First slide">
                            </div>

                        @endif
                            <span class="d-none">{{ $j++ }}</span>
                    @endforeach
                </div>
                <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            {{--<img src="/uploads/images/products/{{ $product->img_path }}" class="w-100" alt="">--}}
        </div>

        <div class="col-12 p-3">

            <div class="row">
                <div class="col-auto">
                    @if(Auth::guest())

                        <a href="/login">
                            <img src="/img/logo/like.png" width="40" height="40" style="cursor: pointer;" alt="">
                            {{--<img src="/img/logo/like3.png" width="30" height="30" style="cursor: pointer; opacity:0; position:absolute;" id="like-0" alt="">--}}
                        </a>

                    @else

                        <form action="/like" method="POST">
                            {{ csrf_field() }}

                            <input type="hidden" id="lid" value="{{ $product->id }}">
                            <input type="hidden" id="lu_id" value="{{ Auth::user()->id }}">
                            <img src="/img/logo/like.png" width="40" height="40" style="cursor: pointer;" id="like" alt="">
                            {{--<img src="/img/logo/like3.png" width="30" height="30" style="cursor: pointer; opacity:0; position:absolute;" id="like-0" alt="">--}}
                        </form>


                    @endif
                </div>

                <div class="col-auto">
                    @if(Auth::guest())

                        <a href="/login">

                            <img src="/img/logo/korzina1.png"  width="40" height="40" alt="" style="cursor: pointer;">
                            {{--<img src="/img/logo/korzina2.png" id="buy-0" width="50" height="50" alt="" style="cursor: pointer;opacity:0; position:absolute; ">--}}
                        </a>

                    @else

                        <form action="/buy" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" id="bid" value="">
                            <input type="hidden" id="bu_id" value="">
                            <img src="/img/logo/korzina1.png" id="buy" width="40" height="40" alt="" style="cursor: pointer;">
                            {{--<img src="/img/logo/korzina2.png" id="buy-0" width="50" height="50" alt="" style="cursor: pointer;opacity:0; position:absolute; ">--}}
                        </form>

                    @endif
                </div>
                <div class="text-light col d-flex flex-row align-items-center justify-content-center" style=" border-bottom-left-radius: 30px; border-top-left-radius: 30px; background-color: #E19075;">
                    <p class="m-0" style="font-size: 1rem;"><span class="price-text">{{ $product->price }}</span> KGS</p>
                </div>

            </div>


        </div>


        <div class="col-12">
            <div class="row py-1">
                <div class="col-12">
                    <div class="row">
                        <div class="col-auto pr-0">
                            <span class="m-0">РАЗМЕРЫ - </span>
                        </div>
                        <div class="col pl-1">
                            <span class="size-text">{{ $product->size->name }}</span>
                        </div>
                    </div>
                    <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-auto pr-0">
                            <span class="m-0">ЦВЕТА - </span>
                        </div>
                        <div class="col pl-1">
                            <span class="color-text">{{ $product->color->name }}</span>
                        </div>
                    </div>
                    <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-auto pr-0">
                            <span class="m-0">МАТЕРИАЛ - </span>
                        </div>
                        <div class="col pl-1">
                            <span> ШЕЛК</span>
                        </div>
                    </div>
                    <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                </div>


                <div class="col-12">
                    <div class="row">
                        <div class="col-auto pr-0">
                            <span class="m-0">ПРОИЗВОДСТВО - </span>
                        </div>
                        <div class="col pl-1">
                            <span class="brand-text">{{ $product->brand->name }}</span>
                        </div>
                    </div>
                    <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                </div>

            </div>
        </div>


        <div class="col-12">
            <div class="row">
                @include('commentform')
            </div>
        </div>

    </div>

@endsection