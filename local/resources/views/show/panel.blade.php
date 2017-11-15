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
                <div class="pt-2"><img src="/img/logo/info.png" alt=""> Информация о бутике</div>
                <div class="pt-2"><img src="/img/logo/contract.png" alt=""> Срок контракта</div>
                <div class="pt-2"><img src="/img/logo/clothes.png" alt=""> Количество товаров</div>
                <div class="pt-2"><a href="/sell/{{$boutic->id}}"><img src="/img/logo/report.png" alt=""> Оформление продаж</a></div>
            </div>
            <div class="col">
                <div class="pt-2"><img src="/img/logo/status.png" alt=""> Статус / Тариф</div>
                <div class="pt-2"><img src="/img/logo/contract.png" alt=""> Дата заключения</div>
                <div class="pt-2"><img src="/img/logo/sell.png" alt=""> Количество проданных</div>
                <div class="pt-2"><img src="/img/logo/person.png" alt=""> Частые покупатели</div>
            </div>
        </div>
    </div>

@endsection
