@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row">
            @foreach($boutic->users as $user)
                <div class="col-2">
                    <a href="/profile/{{ $user->id }}">
                        <div class="row d-flex justify-content-center">
                            <div class="col-auto">
                                <img class="rounded-circle" src="/uploads/avatars/{{ $user->img_path }}" width="100" height="100" alt="">
                            </div>
                            <div class="col-auto">
                                <p class="mt-3">{{ $user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection