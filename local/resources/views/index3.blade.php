<section>
    <div class="container container-spec">
        <div class="row">
            @if($is_products == false)

                <div class="col d-flex flex-row p-5 justify-content-center">
                    <p>К сожалению, на данный момент вещей нет!</p>
                </div>

@elseif($is_products == true)
            @foreach($products as $product)
                <p style="display: none;">{{ $i = $product->photos->count() }}</p>
                <a href="#modal"  data-toggle="modal" class="col-md-3 col-6 my-4" data-id = "{{ $product->id }}">
                    <div class="card bg-dark text-dark" style="box-shadow: 5px 5px 12px 0px rgba(0,0,0,0.55); border-radius: 0px; background-image: url('/uploads/images/products/{{ $product->img_path }}'); background-position: center top; background-size: cover; height: 253px;">
                        <img style="opacity: 0;" class="card-img img-card" src="/uploads/images/products/{{ $product->img_path }}" alt="Card image" height="253">
                        <div class="card-img-overlay text-center">
                            <h4 class="card-title">{{ $product->name }}</h4>
                        </div>
                    </div>
                </a>



            @endforeach




                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="border-radius: 0px; border-top-right-radius: 45px; background-color: #EBEDEC;">

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

                                        <div class="row text-light bg-success" id="main-modal-text" style="border-bottom-right-radius: 50px; border-top-right-radius: 70px 60px; margin-right: -26px;">
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
                                                | {{ $product->count_likes }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="embed-responsive embed-responsive-4by3 ml-3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                            </div>
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
            @endif
        </div>
    </div>
</section>