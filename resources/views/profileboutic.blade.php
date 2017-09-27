@extends('layouts.app')

@section('content')

    <section>
        <div class="container p-md-5 p-4 container-spec">
            <div class="row justify-content-center">
                <div class="col-md-auto col-12 row justify-content-center">
                    <img class="logo-ava rounded-circle" width="150" height="150" src="/uploads/avatars/{{ $boutic->img_path }}" alt="">
                </div>
                <div class="col-md col-12 d-flex align-content-between flex-wrap">
                    <div class="col-12">
                        <div class="row justify-content-center p-3">
                            <div class="col-md-auto col-12 text-center">
                                <p class="nick">{{ $boutic->name }}'s Page</p>
                            </div>
                            @if(Auth::guest())
                                <form  class="mt-4 mt-md-0 col-auto ml-md-auto d-flex align-items-center justify-content-center">

                                    <a href="/login" class="rounded-circle p-0" style="cursor: pointer; border: 0px;">
                                        <div class="row bg-light subscribe align-items-center">
                                            <p class="col-auto mr-auto m-0">Подписаться</p>
                                            <div class="p-2 p-md-3 rounded-circle bg-danger">
                                                <img class="logo-sub" src="/img/straights/sub.png" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </form>

                            @elseif(Auth::user() && Auth::user()->is_boutic == 0)
                                <form action="/subscribe" method="POST" class="mt-4 mt-md-0 col-auto ml-md-auto d-flex align-items-center justify-content-center">
                                    {{ csrf_field() }}
                                    <input type="hidden" id="sid" name="id" value="{{ $boutic->id }}">
                                    <input type="hidden" id="sb_id" name="b_id" value="{{ $boutic->user->id }}">
                                    <input type="hidden" id="su_id" name="u_id" value="{{ Auth::user()->id }}">

                                    <a id="sub" class="rounded-circle p-0" style="cursor: pointer; border: 0px;">
                                        <div class="row bg-light subscribe align-items-center">
                                            <p class="col-auto mr-auto m-0" id="subs-flag"></p>
                                            <div class="p-2 p-md-3 rounded-circle bg-danger">
                                                <img src="/img/straights/sub.png" class="logo-sub" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </form>

                            @elseif(Auth::user()->is_boutic == 1)
                                @if($boutic->user_id == Auth::user()->id)
                                    <form action="/bproduct" method="POST" class="mt-4 mt-md-0 col-auto ml-md-auto d-flex align-items-center justify-content-center">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $boutic->id}}">
                                        <button  type="submit"  class="rounded-circle p-0" style="cursor: pointer; border: 0px;">
                                            <div class="row bg-light subscribe align-items-center">
                                                <p style="font-size: 24px;" class="col-auto mr-auto m-0">Настройки</p>
                                                <div class="p-2 rounded-circle">
                                                    <img src="/img/straights/options.png" width="30" height="30" alt="">
                                                </div>
                                            </div>
                                        </button>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="col-12 f-18">
                        <div class="row p-md-3 justify-content-around">
                            <div class="col-auto col-md-auto mr-md-5">
                                <div class="row">
                                    <div class="col-auto row">
                                        <span class="badge badge-secondary">
                                            {{ $boutic->products->count() }}
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="row ml-1 ml-md-0">Публикаций</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto col-md-auto">
                                <a href="/subscribescount/{{ $boutic->id }}">
                                    <div class="row">
                                        <div class="col-auto row">
                                            <span class="badge badge-danger sub-badge"></span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="row ml-1 ml-md-0">Подписчиков</span>
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

@if($is_products)
    @include('index3')
@endif







@endsection