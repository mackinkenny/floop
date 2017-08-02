@extends('layouts.app')

@section('content')


        <h2>{{ $product->name }}</h2>
        <div class="col-lg-4"><img class="img-responsive" src="/uploads/images/products/{{ $product->img_path }}" alt=""></div>
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
                <br>
                <br>
                <br>
                <br>
                @foreach($product->comments as $comment)
                        <span style="font-size: 20px;">{{ $comment->user->name }}</span>:
                        {{ $comment->comment }}
                        <br>

                @endforeach
        </div>
@endsection