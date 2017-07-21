@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <form action="{{ route('storeProduct') }}" method="POST">
            {{ csrf_field() }}

            <input type="text" name="name">

            <button type="submit">Create</button>
        </form>
    </div>

@endsection