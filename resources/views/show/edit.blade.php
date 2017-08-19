@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">


            <form action="{{ route('filter') }}" method="POST" class="col-lg-6">
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
                    <div class="col-lg-2"><button type="submit" class="btn btn-danger">FILTER</button></div>







                </div>




            </form></div>


        <br>
        @include('index3')


    </div>

@endsection