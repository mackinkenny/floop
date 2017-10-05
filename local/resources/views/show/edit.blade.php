@extends('layouts.app')
@section('content')

    <div class="container">


            <div class="row p-5">
                <form action="/storediscount" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="boutic_id" value="{{ Auth::user()->boutic->id }}">
                    <input type="text" name="percent">
                    <button class="btn btn-danger">Создать</button>
                </form>
            </div>

        <div class="row p-5">
            <form action="{{ url('/bproduct') }}" method="POST" class="col-lg-6">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $boutic->user->id}}">


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
                    <div class="col-auto mx-auto">
                        @foreach($brands as $brand)


                            <div class="radio">
                                <label>
                                    <input type="radio" name="brand_id" id="optionsRadios2" value="{{ $brand->id }}">
                                    {{ $brand->name }}
                                </label>
                            </div>

                        @endforeach
                    </div>


                    <div class="col-auto mx-auto">
                        @foreach($types as $type)

                            <div class="radio">
                                <label>
                                    <input type="radio" name="type_id" id="optionsRadios2" value="{{ $type->id }}">
                                    {{ $type->name }}
                                </label>
                            </div>

                        @endforeach
                    </div>

                    <div class="col-auto mx-auto">
                        @foreach($seasons as $season)

                            <div class="radio">
                                <label>
                                    <input type="radio" name="season_id" id="optionsRadios2" value="{{ $season->id }}">
                                    {{ $season->name }}
                                </label>
                            </div>

                        @endforeach
                    </div>

                    <div class="col-auto"><button type="submit" class="btn btn-danger">FILTER</button></div>
                </div>
            </form>


    <form action="{{ url('/discounts') }}" method="POST" class="col-auto">
        {{ csrf_field() }}
        {{--<input type="hidden" name="products[]" value="{{ $products }}" multiple>--}}
        <select class="d-none" name="products[]" id="" multiple>
            @foreach($products as $product)
                <option value="{{ $product }}" selected></option>
            @endforeach
        </select>
        <select name="discount_id">
            @foreach(Auth::user()->boutic->discounts as $discount)

                <option value="{{ $discount->id }}">{{ $discount->percent }}%</option>

            @endforeach
        </select>
        <button type="submit">Скидка</button>
    </form>








        <br>


</div>
    </div>
    @include('index3')
@endsection