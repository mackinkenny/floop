@extends('layouts.app')

@section('content')



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
                            <a href="{{ route('showProduct', $notice->product->id) }}" id="link">
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
                                <a href="{{ route('showProduct', $notice->product->id) }}" id="link">
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