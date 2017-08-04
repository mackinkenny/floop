@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <form action="{{ route('storeBoutic') }}" method="POST">
            {{ csrf_field() }}

            <input type="text" name="name">

            <select name="user_id">
                @foreach($users as $user)

                    <option value="{{ $user->id }}">{{ $user->name }}</option>

                @endforeach
            </select>

            <button type="submit">Create</button>
        </form>
    </div>

@endsection