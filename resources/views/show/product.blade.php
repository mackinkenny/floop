@extends('layouts.app')

@section('content')


        <h2>{{ $product->name }}</h2>
        <img src="/uploads/images/products/{{ $product->img_path }}" alt="">
        <br>
        {{ $product->brand->name }}
        <div class="col-lg-2">
                <form action="/products/{{ $product->id }}/{{ Auth::user()->id }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn">Like</button>
                </form>
                        <form action="/{{ $product->id }}/{{ Auth::user()->id }}" method="POST">
                                {{ csrf_field() }}
                        <p><textarea name="comment" id="comment" cols="24" rows="4"> </textarea></p>
                                <div class="col-lg-2"><button type="submit" class="btn btn-danger">COMMENT</button></div>
                        </form>
        </div>
@endsection