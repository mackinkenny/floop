@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <form class="col-12 col-md-5 text-light p-5" id="form-login"  method="POST" action="/edituser/{{ Auth::user()->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row align-items-center mb-4">
                    <div class="col-3">
                        <img src="/uploads/avatars/{{ Auth::user()->img_path }}" class="rounded-circle w-100 h-100" alt="">
                    </div>
                    <div class="col">
                        <h3>{{ Auth::user()->name }}</h3>
                    </div>
                </div>

                <div>
                    <label for="exampleInputPassword2">Аватар</label>
                    <input type="file" class="form-control" id="exampleInputPassword2" placeholder=""  name="img_path">
                </div>
                <div>
                    <label for="exampleInputEmail1">Имя</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" autofocus>

                </div>
                <div>
                    <label for="exampleInputPassword1">E-mail</label>
                    <input type="e-mail" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder=""  name="email">
                </div>
                <div>
                    <label for="exampleInputPassword2">Номер телефона</label>
                    <input type="text" class="form-control" id="exampleInputPassword2" placeholder=""  name="phone_number">
                </div>
                <div class="row pt-4 justify-content-around">
                    <button type="submit" class="col-auto btn btn-primary">Подтвердить</button>
                </div>
            </form>




        </div>
    </div>
@endsection