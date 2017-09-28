@extends('layouts.app')

@section('content')

    <div class="container py-5" id="users">
        @if(Auth::user() && Auth::user()->is_boutic == 1)
            <input class="search my-5 d-none d-md-block" placeholder="Поиск по подписчикам">
        @endif
        <ul class="row list" style="list-style: none;">
            @foreach($boutic->users as $user)
                <li class="col-2">
                    <a href="/profile/{{ $user->id }}">
                        <div class="row d-flex justify-content-center">
                            <div class="col-auto">
                                <img class="rounded-circle" src="/uploads/avatars/{{ $user->img_path }}" width="100" height="100" alt="">
                            </div>
                            <div class="col-auto">
                                <p class="mt-3 name">{{ $user->name }}</p>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

    <script>
        var options = {
            valueNames: [ 'name', 'born' ]
        };

        var userList = new List('users', options);
    </script>
@endsection