@extends('layouts.app')

@section('content')

    <section>
        <div class="container p-5">
            <div class="row">
                <div class="col-auto">
                    <img class="rounded-circle" width="150" height="150" src="/uploads/avatars/{{ $boutic->user->img_path }}" alt="">
                </div>
                <div class="col d-flex align-content-between flex-wrap">
                    <div class="col-12">
                        <div class="row p-3">
                            <div class="col-auto">
                                <p class="nick">{{ $boutic->name }}'s Page</p>
                            </div>
                            @if(Auth::user()->is_boutic == 1)
                                @if($boutic->user_id == Auth::user()->id)
                                    <form action="/bproduct" method="POST" class="col-auto ml-auto d-flex align-items-center justify-content-center">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $boutic->user->id}}">
                                        <button  type="submit" id="sub" class="rounded-circle p-0" style="cursor: pointer; border: 0px;">
                                            <div class="row bg-light subscribe align-items-center">
                                                <p style="font-size: 24px;" class="col-auto mr-auto m-0">Настройки</p>
                                                <div class="p-3 rounded-circle">
                                                    <img src="/img/straights/options.png" width="30" height="30" alt="">
                                                </div>
                                            </div>
                                        </button>
                                    </form>
                                @endif
                            @else
                            <form action="/subscribe" method="POST" class="col-auto ml-auto d-flex align-items-center justify-content-center">
                                {{ csrf_field() }}
                                <input type="hidden" id="sid" name="id" value="{{ $boutic->id }}">
                                <input type="hidden" id="sb_id" name="b_id" value="{{ $boutic->user->id }}">
                                <input type="hidden" id="su_id" name="u_id" value="{{ Auth::user()->id }}">

                                <button  type="submit" id="sub" class="rounded-circle p-0" style="cursor: pointer; border: 0px;">
                                    <div class="row bg-light subscribe align-items-center">
                                        <p style="font-size: 24px;" class="col-auto mr-auto m-0">Подписаться</p>
                                        <div class="p-3 rounded-circle bg-danger">
                                            <img src="/img/straights/sub.png" width="30" height="30" alt="">
                                        </div>
                                    </div>
                                </button>
                            </form>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 f-18">
                        <div class="row p-3">
                            <div class="col-auto mr-5">
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="badge badge-light">100</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="row">Публикаций</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="/subscribescount/{{ $boutic->id }}">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="badge badge-danger">200</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="row">Подписчиков</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container bg-light">
            <div class="row">

                @foreach($boutic->products as $product)

                <a href="{{ route('showProduct', $product->id) }}" class="col-3 my-4">
                    <div class="card bg-dark text-dark">
                        <img class="card-img" src="/uploads/images/products/{{ $product->img_path }}" alt="Card image">
                        <div class="card-img-overlay text-center">
                            <h4 class="card-title">{{ $product->name }}</h4>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>






@endsection