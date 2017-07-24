@extends('layouts.app')

@section('content')


    @foreach($cats as $cat)

        <a href="{{ route('sort', $cat->id) }}">{{ $cat->name }}</a>

    @endforeach




    @foreach($cats as $cat)
    @foreach($cat->products as $product)

        {{ $product->name }}
        <br>

    @endforeach
    @endforeach

@endsection