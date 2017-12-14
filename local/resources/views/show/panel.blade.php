@extends('layouts.app')

@section('content')

    <div class="container p-4" style="background-color: #fff;">
        <div class="row">
            <div class="col-auto">
                <img class="rounded-circle border border-light b-4" width="150" height="150" src="/uploads/boutic/avatars/{{ $boutic->img_path }}" alt="">
            </div>
            <div class="col">
                <div class="p-5"><h1>{{$boutic->name}}</h1></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
               <a href="#exampleModalLong" data-toggle="modal" data-target="#exampleModalLong"><div class="pt-2 panelt"><img src="/img/logo/info.png" style="margin-left:5px; margin-bottom:5px;" alt=""> Информация о бутике</div></a>
                <div class="pt-2 panelt"><img src="/img/logo/clothes.png" style="margin-left:5px; margin-bottom:5px;" alt=""> Количество товаров со скидкой</div>
                <a href="/sell/{{$boutic->id}}"><div class="pt-2 panelt"><img src="/img/logo/report.png" style="margin-left:5px; margin-bottom:5px;" alt=""> Оформление продаж</div></a>
            </div>
            <div class="col">
                <div class="pt-2 panelt"><img src="/img/logo/status.png" style="margin-left:5px; margin-bottom:5px;" alt=""> Статус / Тариф</div>
                <div class="pt-2 panelt"><img src="/img/logo/sell.png" style="margin-left:5px; margin-bottom:5px;" alt=""> Количество проданных</div>
                <div class="pt-2 panelt"><img src="/img/logo/person.png" style="margin-left:5px; margin-bottom:5px;" alt=""> Частые покупатели</div>
            </div>
        </div>
    </div>

    <@include('modal.info')
@endsection
