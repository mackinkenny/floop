@extends('layouts.app')

@section('content')

    @foreach($products as $product)

        <h2>{{ $product->name }}</h2>

    @endforeach

@endsection