@extends('layouts.app')

@section('content')

    @foreach($boutics as $boutic)

        <h2>{{ $boutic->name }}</h2>

    @endforeach

@endsection