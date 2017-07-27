@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row"><form action="{{ route('filter') }}" method="POST">
                {{ csrf_field() }}

                <button>RESET</button>
            </form>

            <form action="{{ route('filter') }}" method="POST">
                {{ csrf_field() }}



                <select name="cat_id">
                    @foreach($cats as $cat)

                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>

                    @endforeach
                </select>

                <select name="brand_id">
                    @foreach($brands as $brand)

                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>

                    @endforeach
                </select>

                <button type="submit" class="btn btn-danger">FILTER</button>

            </form></div>
    </div>

    <br>

    @foreach($products as $product)

        {{ $product->name }}
        <br>

    @endforeach

    @yield('all')



@endsection