@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">


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


                    <div class="col-lg-2">
                        @foreach($types as $type)

                            <div class="radio">
                                <label>
                                    <input type="radio" name="type_id" id="optionsRadios2" value="{{ $type->id }}">
                                    {{ $type->name }}
                                </label>
                            </div>

                        @endforeach
                    </div>

                    <div class="col-lg-2">
                        @foreach($seasons as $season)

                            <div class="radio">
                                <label>
                                    <input type="radio" name="season_id" id="optionsRadios2" value="{{ $season->id }}">
                                    {{ $season->name }}
                                </label>
                            </div>

                        @endforeach
                    </div>
                </div>
                    <div class="col-lg-2"><button type="submit" class="btn btn-danger">FILTER</button></div>
            </form>

    <form action="{{ url('/discounts') }}" method="POST" class="col-lg-6">
        {{ csrf_field() }}
        <input type="hidden" name="products[]" value="{{ $products}}" multiple>
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