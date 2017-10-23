@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="panel-body" style="align-items: center">
                        <form class="form-horizontal" method="POST" action="/edituser/{{ Auth::user()->id }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label style="font-weight: bold;" for="name">Name</label>
                            <input type="text" name="name">
                            <br>
                            <label style="font-weight: bold;" for="email">Email</label>
                            <input type="email" name="email">

                            <br>
                            <label style="font-weight: bold;" for="phone_number">Phone number</label>
                            <input type="text" name="phone_number">
                            <br>

                            <label style="font-weight: bold;" for="img_path">Profile image</label>
                            <input type="file" name="img_path">



                            <button type="submit">Подтвердить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection