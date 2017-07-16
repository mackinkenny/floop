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
                            <label for="name">Name</label>
                            <input type="text" name="name">
                            <br>
                            <label for="password">Password</label>
                            <input type="password" name="password">

                            <br>
                            <label for="email">Email</label>
                            <input type="email" name="email">

                            <br>
                            <label for="phone_number">Phone number</label>
                            <input type="text" name="phone_number">
                            <br>

                            <label for="img_path">Image</label>
                            <input type="file" name="img_path">


                            <button type="submit">Подтвердить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection