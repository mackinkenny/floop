@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($centers as $center)

                        <div class="row">

                            <a href="/profile/{{ $boutic->user->id }}">
                                <div class="col-lg-1">
                                    <img class="img-responsive" src="/uploads/avatars/{{ $boutic->user->img_path }}" alt="">
                                </div>
                                <div class="col-lg-8">
                                    {{ $boutic->name }}
                                </div>

                            </a>
                            <div class="col-lg-3"><a href="/subscribe/{{ $boutic->user->id }}/{{ Auth::user()->id }}" class="btn">Подлизаться</a></div>
                        </div>




                        <br>

                    @endforeach
                    @foreach($boutics as $boutic)

                            <div class="row">

                                <a href="/profile/{{ $boutic->user->id }}">
                                <div class="col-lg-10">
                                    <img class="img-responsive" src="/uploads/avatars/{{ $boutic->user->img_path }}" alt="">
                                </div>
                                <div class="col-lg-8">
                                    {{ $boutic->name }}
                                </div>
                                    
                                 </a>
                                <div class="col-lg-3"><a href="/subscribe/{{ $boutic->user->id }}/{{ Auth::user()->id }}" class="btn">Подлизаться</a></div>
                            </div>




                        <br>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
