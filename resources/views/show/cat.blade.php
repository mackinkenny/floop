@extends('layouts.app')

@section('content')

    @foreach($cats as $cat)

        <h2>{{ $cat->name }}</h2>

    @endforeach

@endsection