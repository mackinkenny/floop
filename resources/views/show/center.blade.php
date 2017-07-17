@extends('layouts.app')

@section('content')

    @foreach($centers as $center)

        <h2>{{ $center->name }}</h2>

    @endforeach

@endsection