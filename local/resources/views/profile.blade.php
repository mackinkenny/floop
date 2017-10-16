@extends('layouts.app')

@section('content')

    <section>
        <div class="container p-md-5 p-4 container-spec">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <img class="rounded-circle border b-5 border-light logo-ava" width="150" height="150" src="/uploads/avatars/{{ $user->img_path }}" alt="">
                </div>
                <div class="col d-flex align-content-between flex-wrap">
                    <div class="col-12">
                        <div class="row p-3 justify-content-center justify-content-md-start">
                            <div class="col-auto ml-md-5">
                                <p class="nick">{{ $user->name }}</p>
                            </div>
                            <div class="col-auto d-flex align-items-center justify-content-center">
                                @if(Auth::guest())

                                @elseif(Auth::user()->id == $user->id)

                                    <a href="/settings" class="rounded-circle">
                                        <img src="/img/straights/options.png" width="40" height="40" alt="">
                                    </a>

                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 f-18">
                        <div class="row justify-content-around">
                            <div class="col-auto">
                                <div class="row">
                                    <div class="col-auto d-flex flex-row align-items-center py-1 px-3 rounded-circle-our br-r-0 bg-gray text-light">
                                        <span class="">{{ $user->count_likes }}</span>
                                    </div>
                                    <div class="col-auto py-1 px-3 bg-light bl-r-0 d-flex flex-row align-items-center rounded-circle-our">
                                        <span class="">Понравившихся</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                    <div class="col-auto py-1 rounded-circle-our br-r-0 px-3 bg-gray text-light d-flex flex-row align-items-center">
                                        <span class="">{{ $user->count_buys }}</span>
                                    </div>
                                    <div class="col-auto px-3 py-1 bg-light bl-r-0 rounded-circle-our d-flex flex-row align-items-center">
                                        <span class="">Покупок</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section>
        <div class="container bg-light">
            <ul class="row nav nav-tabs" id="myTab" role="tablist">
                <li class="col text-center nav-item">
                    <a class="row nav-link active bg-dark" id="like-tab" data-toggle="tab" href="#like-show-show" role="tab" aria-controls="like" aria-expanded="true"><img class="logo-control" src="/img/straights/like.png" width="30" height="30" alt=""></a>
                </li>
                <li class="col text-center nav-item">
                    <a class="row nav-link bg-dark" id="buy-tab" data-toggle="tab" href="#buy-show-show" role="tab" aria-controls="buy"><img class="logo-control" src="/img/straights/save.png" width="30" height="30" alt=""></a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="like-show-show" role="tabpanel" aria-labelledby="like-tab">


                        @include('index3', ['products' => $products_liked, 'is_products' => $is_products_liked])


                </div>
                <div class="tab-pane fade" id="buy-show-show" role="tabpanel" aria-labelledby="buy-tab">


                        @include('index3', ['products' => $products_buied, 'is_products' => $is_products_buied])

                </div>
            </div>
        </div>
    </section>


@endsection
