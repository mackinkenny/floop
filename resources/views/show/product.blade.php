@extends('layouts.app')

@section('content')


    <h2>{{ $product->name }}</h2>
    <div class="col-lg-3"><img class="img-responsive" src="/uploads/images/products/{{ $product->img_path }}" height="320px" width="350px" alt=""></div>
    <br>
    {{ $product->brand->name }}
    <br>
    <div class="col-lg-2">
        <div class="row">
            @if($product->discount)

                <h3>Цена со скидкой <br>{{ $product->price - $product->price * $product->discount->percent / 100 }} сом</h3>
            @else
                <h3>Цена <br>{{ $product->price }} сом</h3>
            @endif
        </div>
    </div>

    <a href="/edit/product/{{ $product->id }}" class="btn btn-danger">Edit</a>

    <div class="col-lg-2">
        <form action="/like" method="POST">
            {{ csrf_field() }}

            <input type="hidden" id="lid" value="{{ $product->id }}">
            <input type="hidden" id="lu_id" value="{{ Auth::user()->id }}">
            <i class="fa fa-heart-o fa-2x" aria-hidden="true" id="like" style="cursor: pointer"></i>
        </form>
        <br>
        <form action="/buy" method="POST">
            {{ csrf_field() }}
            <input type="hidden" id="bid" value="{{ $product->id }}">
            <input type="hidden" id="bu_id" value="{{ Auth::user()->id }}">
            <button type="submit" id="buy">Buy</button>
        </form>
        <br>
        <form action="/comment/{{ $product->id }}/{{ Auth::user()->id }}" method="POST">
            {{ csrf_field() }}

            <p><input name="comment" id="comment" cols="24" rows="4"></p>
            <div class="col-lg-2"><button type="submit" id="comment_btn">COMMENT</button></div>
        </form>
        <br>
        <br>
        <br>
        <br>
        @foreach($product->comments as $comment)
            @if($comment->user->boutic)
                    <a href="/profile/{{ $comment->user->id }}" style="text-decoration: none; "><span style="font-size: 20px;">{{ $comment->user->boutic->name }}</span></a>:
                    {{ $comment->comment }}
                    <br>
            @else
            <a href="/profile/{{ $comment->user->id }}"><span style="font-size: 20px;">{{ $comment->user->name }}</span></a>:
            {{ $comment->comment }}
            <br>
            @endif

        @endforeach
    </div>
@endsection