@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <form action="{{ route('storeBoutic') }}" method="POST">
            {{ csrf_field() }}
            <br><br><br><br>
            <input type="text" name="name">

            <select name="user_id">
                @foreach($users as $user)

                    <option value="{{ $user->id }}">{{ $user->name }}</option>

                @endforeach
            </select>
                    <select name="center_id">
                    @foreach($centers as $center)

                        <option value="{{ $center->id }}">{{ $center->name }}</option>

                    @endforeach
            </select>

            <select name="words[]" class="js-example-tokenizer w-50" id="" multiple>
            </select>

            <button type="submit">Create</button>
        </form>
    </div>

@endsection