@extends('layouts.app')

@section('content')

        <div class="container py-5">

            <div class="row">
                <h2>{{ $center->name }}</h2>
            </div>
            <div class="row">
                <br>
                <br>

                @foreach($center->boutics as $boutic)

                    <div class="col-auto">
                        <a href="/profile/{{ $boutic->user_id }}">
                            <img width="150" height="150" class="rounded-circle"  src="/uploads/avatars/{{ $boutic->img_path }}" alt="">
                            <p class="text-center my-2">{{ $boutic->name }}</p>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>




@endsection