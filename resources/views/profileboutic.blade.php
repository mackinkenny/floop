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
                                        <span class="badge badge-light">
                                            {{ $boutic->products->count() }}
                                        </span>
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
                                            <span class="badge badge-danger">{{ $boutic->subs }}</span>
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

                <a href="#modal"  data-toggle="modal" class="col-3 my-4">
                    <div class="card bg-dark text-dark">
                        <img class="card-img" src="/uploads/images/products/{{ $product->img_path }}" alt="Card image">
                        <div class="card-img-overlay text-center">
                            <h4 class="card-title">{{ $product->name }}</h4>
                        </div>
                    </div>
                </a>


                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $product->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/uploads/images/products/{{ $product->img_path }}" width="300" height="300" alt="">
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <h3>{{ $product->name }}</h3>
                                                </div>
                                                <div class="col">
                                                    Описание
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>






@endsection