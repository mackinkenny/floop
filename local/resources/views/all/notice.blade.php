@extends('layouts.app')

@section('content')
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style=" background-color: #EBEDEC;">

                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-auto pr-0" id="mobile-carousel-all">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">

                                </ol>
                                <div class="carousel-inner mobile-carousel">

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

                        </div>
                        <div class="col pr-5">

                            <div class="row text-light bg-success" id="main-modal-text" style="margin-right: -33px;">
                                <div class="col-auto mx-auto pl-5">
                                    <h1 class="text-center h4-text"></h1>
                                </div>
                                <div class="col-auto">
                                    <button id="close" type="button" class="close text-light" data-dismiss="modal" aria-label="Close" style="cursor: pointer">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center" id="premain-modal-text">
                                <div class="col-10 text-center bg-light py-2 mb-3" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                                    <h3 class="product-boutic" style="font-size: 1rem;"></h3>
                                </div>
                            </div>

                            <div class="row py-1">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <p class="m-0">РАЗМЕРЫ - </p>
                                        </div>
                                        <div class="col pl-1">
                                            <span class="size-text"></span>
                                        </div>
                                    </div>
                                    <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <p class="m-0">ЦВЕТА - </p>
                                        </div>
                                        <div class="col pl-1">
                                            <span class="color-text"></span>
                                        </div>
                                    </div>
                                    <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <p class="m-0">МАТЕРИАЛ - </p>
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
                                            <p class="m-0">ПРОИЗВОДСТВО - </p>
                                        </div>
                                        <div class="col pl-1">
                                            <span class="brand-text"></span>
                                        </div>
                                    </div>
                                    <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                                </div>

                            </div>

                            <div class="row my-1">
                                <div class="pr-1 col-auto" id="like-form">
                                    {{--<a href="">--}}
                                    {{--<img src="/img/straights/likes.png" width="30" height="30" alt="">--}}
                                    {{--</a>--}}
                                    <form action="/like" method="POST">
                                        {{ csrf_field() }}

                                        <input type="hidden" id="lid" value="">
                                        <input type="hidden" id="lu_id" value="">
                                        <img src="/img/straights/likes.png" width="30" height="30" style="cursor: pointer;" id="like" alt="">
                                    </form>
                                </div>
                                <div class="pl-1 col-auto like_count" style="font-size: 1.5rem; line-height: 1.4rem; font-weight: 400;">
                                    |
                                </div>
                            </div>
                            <div class="row">
                                @include('commentform')
                            </div>

                            <div class="row  my-2">
                                <div class="col-auto" id="buy-form">
                                    <form action="/buy" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" id="bid" value="">
                                        <input type="hidden" id="bu_id" value="">
                                        <img src="/img/straights/buy.png" id="buy" width="50" height="50" alt="" style="cursor: pointer;">
                                    </form>
                                </div>
                                <div class="text-light col d-flex flex-row align-items-center justify-content-center" style="margin-right: -19px; border-bottom-left-radius: 30px; border-top-left-radius: 30px; background-color: #E19075;">
                                    <p class="m-0" style="font-size: 1.4rem;"><span class="price-text"></span> KGS</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">
            @if(Auth::user()->is_boutic)
            @foreach($notices as $notice)
                @if($notice->text_id == 0)

                <div class="col-12">
                    <div class="row justify-content-center">

                        <div class="col-auto">
                            <img width="40" height="40" src="/uploads/avatars/{{ $notice->user->img_path }}" alt="">
                        </div>
                        <div class="col-auto ml-1">
                            <strong>{{ $notice->user->name }}</strong>
                        </div>
                        <div class="col-auto">
                            понравилась ваша публикация <strong>{{ $notice->product->name }}</strong>
                        </div>
                        <div class="col-auto">
                            <a href="#modal"  data-toggle="modal" class="col-md-3 col-6 my-4" data-id = "{{ $notice->product->id }}">
                                <img src="/uploads/images/products/{{ $notice->product->img_path }}" width="40" height="40" alt="">
                            </a>
                        </div>

                    </div>
                </div>
                        <div class="col-12">
                            <hr>
                        </div>

                @endif

                @if($notice->text_id == 1)

                    <div class="col-12">
                        <div class="row justify-content-center">

                            <div class="col-auto">
                                <img width="40" height="40" src="/uploads/avatars/{{ $notice->user->img_path }}" alt="">
                            </div>
                            <div class="col-auto ml-3">
                                <strong>{{ $notice->user->name }}</strong>
                            </div>
                            <div class="col-auto">
                                 добавил(-а) в корзину товар: <strong>{{ $notice->product->name }}</strong>
                            </div>
                            <div class="col-auto">
                                <a href="#modal"  data-toggle="modal" class="col-md-3 col-6 my-4" data-id = "{{ $notice->product->id }}">
                                    <img src="/uploads/images/products/{{ $notice->product->img_path }}" width="40" height="40" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                        <div class="col-12">
                            <hr>
                        </div>

                @endif


                @if($notice->text_id == 2)

                    <div class="col-12 my-2">
                        <div class="row justify-content-center">

                            <a class="row" href="/profile/{{ $notice->user->id }}">
                                <div class="col-auto">
                                    <img width="40" height="40" src="/uploads/avatars/{{ $notice->user->img_path }}" alt="">
                                </div>
                                <div class="col-auto ml-3">
                                    <strong>{{ $notice->user->name }}</strong>
                                </div>
                            </a>
                            <div class="col-auto">
                                подписался(-ась) на ваши обновления.
                            </div>

                        </div>
                    </div>
                        <div class="col-12">
                            <hr>
                        </div>

                @endif

                @if($notice->text_id == 4)

                    <div class="col-12">
                        <div class="row">

                            <a href="/profile/{{ $notice->user->id }}">
                                <div class="col-auto">
                                    <img width="40" height="40" src="/uploads/avatars/{{ $notice->user->img_path }}" alt="">
                                </div>
                                <div class="col-auto ml-3">
                                    <strong>{{ $notice->user->name }}</strong>
                                </div>
                            </a>
                            <div class="col-auto mx-auto">
                                прокомментировал(-а) вашу публикацию: <strong>{{ $notice->product->name }}</strong>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('showProduct', $notice->product->id) }}" id="link">
                                    <img src="/uploads/images/products/{{ $notice->product->img_path }}" width="40" height="40" alt="">
                                </a>
                            </div>

                        </div>
                    </div>

                @endif


                @endforeach
            @else
                У вас нет уведомлений!
            @endif
        </div>
    </div>



    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--@if(Auth::user()->is_boutic)--}}
            {{--@foreach($notices as $notice)--}}
            {{--<div class="col-auto d-flex justify-content-center">--}}
                {{--@if($notice->text_id == 0)--}}
                    {{--<a href="/profile/{{ $notice->user->id }}"><div class="col-auto"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a> <div class="col-auto"><strong>{{ $notice->user->name }}</strong> понравилась ваша публикация <strong>{{ $notice->product->name }}</strong> </div><a href="{{ route('showProduct', $notice->product->id) }}" id="link"><div class="col-auto"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" width="30px"alt=""></div></a>--}}
                {{--<br>--}}
                {{--@endif--}}
                    {{--@if($notice->text_id == 1)--}}
                        {{--<a href="/profile/{{ $notice->user->id }}"><div class="col-lg-1"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a><div class="col-lg-6"><strong>{{ $notice->user->name }}</strong> добавил(-а) в корзину товар: <strong>{{ $notice->product->name }}</strong> </div><a href="{{ route('showProduct', $notice->product->id) }}" id="link"><div class="col-lg-1"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" width="30px"alt=""></div></a>--}}
                        {{--<br>--}}
                    {{--@endif--}}
                    {{--@if($notice->text_id == 2)--}}
                        {{--<a href="/profile/{{ $notice->user->id }}"><div class="col-lg-1"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a> <div class="col-lg-6"><strong>{{ $notice->user->name }}</strong> подписался(-ась) на ваши обновления.</div>--}}
                        {{--<br>--}}
                    {{--@endif--}}

                    {{--@if($notice->text_id == 3)--}}
                        {{--<a href="/profile/{{ $notice->user->id }}"><div class="col-lg-1"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a> <div class="col-lg-6"><strong>{{ $notice->user->name }}</strong> прокомментировал(-а) вашу публикацию: {{ $notice->comment->comment }}</div><a href="{{ route('showProduct', $notice->product->id) }}" id="link"><div class="col-lg-1"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" width="30px"alt=""></div></a>--}}
                        {{--<br>--}}
                    {{--@endif--}}
            {{--</div>--}}
                {{--<br>--}}
                    {{--<br>--}}
            {{--@endforeach--}}
                {{--@else--}}
            {{--У вас нет уведомлений!--}}
                {{--@endif--}}

        {{--</div>--}}
        {{--</div>--}}



@endsection