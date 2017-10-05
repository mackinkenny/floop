@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('bid', Auth::user()->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label for="name">Название</label>
                            <input type="text" name="name">
                            <br>
                            <label for="phone_number">Телефон</label>
                            <input type="text" name="phone_number">
                            <br>
                            <label for="info">Информация о бутике</label>
                            <input type="text" size="256" name="info" style="width:500px;">
                            <br>
                            <label for="delivery">Доставка</label>
                            <input type="text" name="delivery">
                            <br>
                            <label for="img_path">Аватар профиля</label>
                            <input type="file" name="img_path">



                            <button type="submit">Подтвердить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection