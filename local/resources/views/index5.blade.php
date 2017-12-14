<section>
    <div class="container container-spec py-3">
        <div class="row" style="margin-bottom: 100px;">
            @if($is_products == false)

                <div class="col d-flex flex-row p-5 justify-content-center">
                    <p>К сожалению, на данный момент вещей нет!</p>
                </div>

            @elseif($is_products == true)
                @foreach($products as $product)
                    <p style="display: none;">{{ $i = $product->photos->count() }}</p>

                    <div class="col-md-4 col-4 my-md-1 p-1">
                        <div class="circle-icon-seat">
                            @if($product->discount_id)

                                @if($product->discount->percent)
                                    <span class="circle-icon bg-success rounded-circle p-2 p-md-4">
                                    <span class="fs-20 font-weight-bold">{{ $product->discount->percent }}</span>%
                                </span>
                                @endif

                            @endif
                        </div>

                        <a href="#modal" id="a-products" class="d-none d-md-block" data-toggle="modal" class="" data-id = "{{ $product->id }}">
                            <div class="card bg-dark text-dark" id="products" style=" border-radius: 0px; background-image: url('/uploads/images/products/{{ $product->img_path }}'); background-position: center top; background-size: cover;">
                                <img style="opacity: 0;" class="d-none card-img img-card" src="/uploads/images/products/{{ $product->img_path }}" alt="Card image">
                                {{--<div class="card-img-overlay text-center">--}}
                                {{--<h4 class="card-title">{{ $product->name }}</h4>--}}
                                {{--</div>--}}
                            </div>
                        </a>

                        <a href="/product/{{ $product->id }}" id="{{ $product->id }}" class="product d-md-none d-block">
                            <div class="card bg-dark text-dark" id="products" style=" border-radius: 0px; background-image: url('/uploads/images/products/{{ $product->img_path }}'); background-position: center top; background-size: cover;">
                                <img style="opacity: 0;" class="d-none card-img img-card" src="/uploads/images/products/{{ $product->img_path }}" alt="Card image">
                                {{--<div class="card-img-overlay text-center">--}}
                                {{--<h4 class="card-title">{{ $product->name }}</h4>--}}
                                {{--</div>--}}
                            </div>
                        </a>
                    </div>


                @endforeach
            @endif
        </div>
    </div>
</section>