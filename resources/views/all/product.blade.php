@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        @foreach($products as $product)

            {{ $product->name . ' ' . $product->brand->name . ' ' . $product->cat->name }}
            <br>

        @endforeach
    </div>

@endsection