@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            @foreach($user->boutics as $boutic)

                {{ $boutic->name }}
                <br>

            @endforeach
        </div>
    </div>

@endsection