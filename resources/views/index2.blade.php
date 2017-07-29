@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">


            <form action="{{ route('filter') }}" method="POST" class="col-lg-6">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-lg-2">
                        @foreach($cats as $cat)

                            <div class="radio">
                                <label>
                                    <input type="radio" name="cat_id" id="optionsRadios2" value="{{ $cat->id }}">
                                    {{ $cat->name }}
                                </label>
                            </div>

                        @endforeach
                    </div>
                    <div class="col-lg-2">
                        @foreach($brands as $brand)


                            <div class="radio">
                                <label>
                                    <input type="radio" name="brand_id" id="optionsRadios2" value="{{ $brand->id }}">
                                    {{ $brand->name }}
                                </label>
                            </div>

                        @endforeach
                    </div>
                    <div class="col-lg-2"><button type="submit" class="btn btn-danger">FILTER</button></div>







                </div>




            </form></div>


    <br>
    <div class="row">
    @foreach($products as $product)

        <div class="col-lg-3">
            <input type="hidden" value="{{ $product->id }}" id="id">
            <a href="#" id="link"><img src="/uploads/images/products/{{ $product->img_path }}" alt=""></a>
            <br>
            {{ $product->name }}
            <br>
            {{ $product->brand->name }}
            <br>
            {{ $product->cat->name }}
            <br>
            {{ $product->color->name }}
            <br>
            {{ $product->size->name }}
            <br>
            <br>
            <br>
        </div>

        <div class="col-md-6 modal-form">
            
        </div>
    @endforeach
    </div>

    @yield('all')

    </div>

@endsection