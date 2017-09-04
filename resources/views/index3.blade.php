<section>
    <div class="container container-spec">
        <div class="row">

            @foreach($products as $product)
                <p style="display: none;">{{ $i = $product->photos->count() }}</p>
                <a href="#modal{{ $product->id }}"  data-toggle="modal" class="col-3 my-4">
                    <div class="card bg-dark text-dark" style="box-shadow: 5px 5px 12px 0px rgba(0,0,0,0.55); border-radius: 0px;">
                        <img class="card-img" src="/uploads/images/products/{{ $product->img_path }}" alt="Card image" height="253">
                        <div class="card-img-overlay text-center">
                            <h4 class="card-title">{{ $product->name }}</h4>
                        </div>
                    </div>
                </a>


                <div class="modal fade" id="modal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="border-radius: 0px; border-top-right-radius: 45px; background-color: #EBEDEC;">

                            <div class="modal-body p-0">
                                <div class="row">
                                    <div class="col-auto pr-0">
                                        <div id="carouselExampleIndicators{{ $product->id }}" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                @for($j = 0; $j < $i; $j++)
                                                    @if($j == 0)
                                                        <li data-target="#carouselExampleIndicators{{ $product->id }}" data-slide-to="{{ $j }}" class="active"></li>
                                                    @else
                                                        <li data-target="#carouselExampleIndicators{{ $product->id }}" data-slide-to="{{ $j }}"></li>
                                                    @endif
                                                @endfor

                                            </ol>
                                            <div class="carousel-inner" style="width: 500px; height: 500px;">
                                                @foreach($product->photos as $index => $photo)
                                                    @if($index == 0)
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="/uploads/images/products/{{ $photo->img_path }}">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="/uploads/images/products/{{ $photo->img_path }}">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev bg-light" href="#carouselExampleIndicators{{ $product->id }}" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next bg-light" href="#carouselExampleIndicators{{ $product->id }}" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="col pr-5">

                                        <div class="row text-light bg-success" style="border-bottom-right-radius: 50px; border-top-right-radius: 70px 60px; margin-right: -26px;">
                                            <div class="col-auto mx-auto">
                                                <h1 class="text-center">{{ $boutic->name }}</h1>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="cursor: pointer">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-10 text-center bg-light py-2 mb-3" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                                                <h3 style="font-size: 1rem;">{{ $product->name }} ОТ {{$boutic->name}}</h3>
                                            </div>
                                        </div>

                                        <div class="row py-1">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <p class="m-0">РАЗМЕРЫ - </p>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <span> {{ $product->size->name }}</span>
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
                                                        <span> {{ $product->color->name }}</span>
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
                                                        <span> {{ $product->brand->name }}</span>
                                                    </div>
                                                </div>
                                                <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="pr-1 col-auto">
                                                {{--<a href="">--}}
                                                    {{--<img src="/img/straights/likes.png" width="30" height="30" alt="">--}}
                                                {{--</a>--}}
                                                <form action="/like" method="POST">
                                                    {{ csrf_field() }}

                                                    <input type="hidden" id="lid" value="{{ $product->id }}">
                                                    <input type="hidden" id="lu_id" value="{{ Auth::user()->id }}">
                                                    <img src="/img/straights/likes.png" width="30" height="30" style="cursor: pointer;" id="like" alt="">
                                                </form>
                                            </div>
                                            <div class="pl-1 col-auto" style="font-size: 1.5rem; line-height: 1.4rem; font-weight: 400;">
                                                | {{ $product->count_likes }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-auto">
                                                <form action="/buy" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" id="bid" value="{{ $product->id }}">
                                                    <input type="hidden" id="bu_id" value="{{ Auth::user()->id }}">
                                                    <img src="/img/straights/buy.png" id="buy" width="30" height="30" alt="" style="cursor: pointer;">
                                                </form>
                                            </div>
                                            <div class="text-light col d-flex flex-row align-items-center justify-content-center" style="margin-right: -19px; border-bottom-left-radius: 30px; border-top-left-radius: 30px; background-color: #E19075;">
                                                <p class="m-0" style="font-size: 1.4rem;">10000 KGS</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>