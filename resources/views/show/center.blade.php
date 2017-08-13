@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="row">
                <h2>{{ $center->name }}</h2>
            </div>
            <div class="row">
                <br>
                <br>

                @foreach($center->boutics as $boutic)

                    <div class="col-lg-3">
                        <a href="/profile/{{ $boutic->id }}">
                            <img class="img-responsive"  src="/uploads/avatars/{{ $boutic->user->img_path }}" alt="">
                        </a>
                    </div>

                @endforeach

            </div>
        </div>




@endsection