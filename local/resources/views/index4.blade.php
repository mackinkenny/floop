<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style=" background-color: #EBEDEC;">

            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-auto pr-0" id="mobile-carousel-all">
                        <div class="circle-icon-seat">

                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
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

                        <div class="row text-light bg-success" id="main-modal-text" style="                                             margin-right: -33px;">
                            <div class="col-auto mx-auto pl-5">
                                <h2 class="text-center">
                                    <a href="" class="h4-text"></a>
                                </h2>
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

                        <div class="mx-auto m-md-0 row py-1">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-auto pr-0">
                                        <span class="m-0">РАЗМЕРЫ - </span>
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
                                        <span class="m-0">ЦВЕТА - </span>
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
                                        <span class="brand-text"></span>
                                    </div>
                                </div>
                                <hr class="my-1" style="border-top: 1px solid rgba(0, 0, 0, 0.53);">
                            </div>

                        </div>

                        <div class="row mx-auto m-md-0 my-1">
                            <div class="pr-1 col-auto" id="like-form">
                                {{--<a href="">--}}
                                {{--<img src="/img/straights/likes.png" width="30" height="30" alt="">--}}
                                {{--</a>--}}
                                @if(Auth::guest())

                                    <a href="/login">
                                        <img src="/img/logo/like.png" width="30" height="30" style="cursor: pointer;" alt="">
                                        {{--<img src="/img/logo/like3.png" width="30" height="30" style="cursor: pointer; opacity:0; position:absolute;" id="like-0" alt="">--}}
                                    </a>

                                @else

                                    <form action="/like" method="POST">
                                        {{ csrf_field() }}

                                        <input type="hidden" id="lid" value="">
                                        <input type="hidden" id="lu_id" value="">
                                        <div style="background-image: url('/img/logo/like3.png'); background-position:center; background-size:cover;">
                                            <img src="/img/logo/like.png" width="30" height="30" style="cursor: pointer; position:relative; z-index:999; " id="like" alt="">
                                        </div>
                                        {{--<img src="/img/logo/like3.png" width="30" height="30" style="top: 0px; opacity:0; position:absolute;" id="like-0" alt="">--}}
                                    </form>

                                @endif
                            </div>
                            <div class="pl-1 col-auto like_count" style="font-size: 1.5rem; line-height: 1.4rem; font-weight: 400;">
                            </div>
                        </div>
                        <div class="row ml-auto m-md-0">
                            @include('commentform')
                        </div>

                        <div class="row  my-2">
                            <div class="col-auto" id="buy-form">
                                @if(Auth::guest())
                                    <a href="/login">
                                        <img src="/img/logo/korzina1.png" width="50" height="50" alt="" style="position:relative; z-index:999; cursor: pointer;">
                                    </a>
                                @else
                                    <form action="/buy" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" id="bid" value="">
                                        <input type="hidden" id="bu_id" value="">
                                        <div style="background-image: url('/img/logo/korzina2.png'); background-position:center; background-size:cover;">
                                            <img src="/img/logo/korzina1.png" width="40" height="40" style="cursor: pointer; position:relative; z-index:999; " id="buy" alt="">
                                        </div>
                                    </form>
                                @endif
                            </div>
                            <div class="text-light col d-flex flex-row align-items-center justify-content-center" style="margin-right: -19px; border-bottom-left-radius: 30px; border-top-left-radius: 30px; background-color: #E19075;">
                                <p class="m-0" style="font-size: 1rem;"><span class="price-text"></span> KGS</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>