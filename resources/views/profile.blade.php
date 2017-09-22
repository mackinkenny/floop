@extends('layouts.app')

@section('content')

    <section>
        <div class="container p-5 container-spec">
            <div class="row">
                <div class="col-auto">
                    <img class="rounded-circle" width="150" height="150" src="/uploads/avatars/{{ $user->img_path }}" alt="">
                </div>
                <div class="col d-flex align-content-between flex-wrap">
                    <div class="col-12">
                        <div class="row p-3">
                            <div class="col-auto">
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
                        <div class="row p-3">
                            <div class="col-auto mr-5">
                                <a href="">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="badge badge-secondary">{{ $user->count_likes }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="row">Понравившихся</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="badge badge-secondary">{{ $user->count_buys }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="row">Покупок</span>
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
            <ul class="row nav nav-tabs" id="myTab" role="tablist">
                <li class="col text-center nav-item">
                    <a class="row nav-link active bg-dark" id="like-tab" data-toggle="tab" href="#like" role="tab" aria-controls="like" aria-expanded="true"><img src="/img/straights/like.png" width="30" height="30" alt=""></a>
                </li>
                <li class="col text-center nav-item">
                    <a class="row nav-link bg-dark" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy"><img src="/img/straights/save.png" width="30" height="30" alt=""></a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="like" role="tabpanel" aria-labelledby="like-tab">
                    <div class="row">

                        @foreach($user->products as $product)
                            @if($product->pivot->status)

                                <div class="col-3 my-4">
                                    <div class="card bg-dark text-white">
                                        <img class="card-img" src="/uploads/images/products/{{ $product->img_path }}" alt="Card image">
                                        <div class="card-img-overlay text-center">
                                            <h4 class="card-title">{{ $product->name }}</h4>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                    <div class="row">

                        <div class="col-3 my-4">
                            <a href="" class="card bg-dark text-white">
                                <img class="card-img" src="/img/centers/park.jpg" alt="Card image">
                                <div class="card-img-overlay text-center">
                                    <h4 class="card-title">Bishkek Park</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-3 my-4">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="/img/centers/park.jpg" alt="Card image">
                                <div class="card-img-overlay text-center">
                                    <h4 class="card-title">Bishkek Park</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 my-4">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="/img/centers/park.jpg" alt="Card image">
                                <div class="card-img-overlay text-center">
                                    <h4 class="card-title">Bishkek Park</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 my-4">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="/img/centers/park.jpg" alt="Card image">
                                <div class="card-img-overlay text-center">
                                    <h4 class="card-title">Bishkek Park</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 my-4">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="/img/centers/park.jpg" alt="Card image">
                                <div class="card-img-overlay text-center">
                                    <h4 class="card-title">Bishkek Park</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 my-4">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="/img/centers/park.jpg" alt="Card image">
                                <div class="card-img-overlay text-center">
                                    <h4 class="card-title">Bishkek Park</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
