@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <form action="{{ route('storeCat') }}" method="POST">
            {{ csrf_field() }}

            <input type="text" name="name">

            <button type="submit" class="btn btn-danger">Create</button>
        </form>
    </div>

@endsection