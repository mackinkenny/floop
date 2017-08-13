@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Торговые центры</h2>
            </div>
            <div class="col-lg-6">
                <h2>Бутики</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                @foreach($centers as $center)

                    <div class="row">
                        <a href="/center/{{ $center->id }}">
                            <span class="col-lg-1"><img src="/uploads/centers/{{ $center->img_path }}" class="img-responsive" alt=""></span>
                            <span class="col-lg-10">{{ $center->name }}</span>
                        </a>
                    </div>

                    <hr>

                @endforeach
            </div>

            <div class="col-lg-6">
                @foreach($boutics as $boutic)

                    <div class="row">
                        <a href="/profile/{{ $boutic->user->id }}">
                            <span class="col-lg-1"><img src="/uploads/avatars/{{ $boutic->user->img_path }}" class="img-responsive" alt=""></span>
                            <span class="col-lg-10">{{ $boutic->name }}</span>
                        </a>
                    </div>

                    <hr>

                @endforeach
            </div>

        </div>
    </div>
@endsection
