@extends('layouts.app')

@section('content')
    @if($user->count_subs)
        @if(Auth::guest())
            <div class="container-spec container">
                <div class="p-3 row justify-content-center align-items-center">
                    <p class="fs-xs-20 fs-md-30 font-weight-bold">Подписки пользователя {{$user->name}}</p>
                </div>
            </div>
        @elseif(Auth::user()->id == $user->id)
            <div class="container-spec container">
                <div class="p-3 row justify-content-center align-items-center">
                    <p class="fs-xs-20 fs-md-30 font-weight-bold">Мои подписки</p>
                </div>
            </div>
        @else
            <div class="container-spec container">
                <div class="p-3 row justify-content-center align-items-center">
                    <p class="fs-xs-20 fs-md-30 font-weight-bold">Подписки пользователя {{$user->name}}</p>
                </div>
            </div>
        @endif
        <div class="container py-5" id="users">
            <ul class="row list" style="list-style: none;">
                @foreach($user->boutics as $boutic)
                    <li class="col-2">
                        <a href="/profile/{{ $boutic->user_id }}">
                            <div class="row d-flex justify-content-center">
                                <div class="col-auto">
                                    <img class="rounded-circle" src="/uploads/boutic/avatars/{{ $boutic->img_path }}" width="100" height="100" alt="">
                                </div>
                                <div class="col-auto">
                                    <p class="mt-3 name">{{ $boutic->name }}</p>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <div class="container py-5" id="users">
            <ul class="row list" style="list-style: none;">
                Подписок нет!
            </ul>
        </div>
    @endif
@endsection