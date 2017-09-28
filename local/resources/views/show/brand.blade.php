@extends('layouts.app')

@section('content')

    @foreach($brands as $brand)

        <h2>{{ $brand->name }}</h2>

    @endforeach

@endsection