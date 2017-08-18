@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
    @foreach($boutic->users as $user)
                    <div class="row">
                    <a href="/profile/{{ $user->id }}">
                        <span class="col-lg-2"><img src="/uploads/avatars/{{ $user->img_path }}" class="img-responsive" alt=""></span>
                        <span class="col-lg-10">{{ $user->name }}</span>
                    <br>
                        <br>
                    </a>
                    </div>
    @endforeach
            </div>
        </div>
    </div>
@endsection