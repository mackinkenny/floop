@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="/uploads/avatars/{{ $boutic->user->img_path }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $boutic->name }}'s Page</h2>
                <h5>Email: {{ $boutic->user->email }}</h5>
                <h5>Phone:    {{ $boutic->user->phone_number }}</h5>

                <br>


            </div>
        </div>
        <br>
        <br>
        @foreach($boutic->products as $product)

            <div class="col-lg-4">
                <input type="hidden" value="{{ $product->id }}" id="id">
                <a href="{{ route('showProduct', $product->id) }}" id="link"><img class="img-responsive" src="/uploads/images/products/{{ $product->img_path }}" height="300px" width="300px" alt=""></a>
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


        @endforeach
    </div>
@endsection