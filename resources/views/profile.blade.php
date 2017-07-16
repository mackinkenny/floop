@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="/uploads/avatars/{{ $user->img_path }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
               <h2>{{ $user->name }}'s Profile</h2>
            </div>
        </div>
    </div>
@endsection
