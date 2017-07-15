@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="PUT" action="{{ route('id', Auth::user()->id) }}">
                            {{ csrf_field() }}
                            <label for="phone_number">Phone number</label>
                            <input type="text" name="phone_number">
                            <br>


                            <button type="submit">Подтвердить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection