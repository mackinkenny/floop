@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @if(Auth::user()->is_boutic)
            @foreach($notices as $notice)
            <div class="col-md-8 col-md-offset-2">
                @if($notice->text_id == 0)
                    <div class="col-lg-11">Пользователю {{ $notice->user->name }} понравилась ваша публикация {{ $notice->product->name }} </div><div class="col-lg-1"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" alt=""></div>.
                @endif
                    @if($notice->text_id == 1)
                        <div class="col-lg-11">Пользователь {{ $notice->user->name }} добавил в корзину товар: {{ $notice->product->name }} </div><div class="col-lg-1"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" alt=""></div>.
                    @endif
                    @if($notice->text_id == 2)
                        <div class="col-lg-11">Пользователь {{ $notice->user->name }} подписался на ваши обновления.</div>
                    @endif

            </div>
            @endforeach
                @else
            Тут ничего нет!
                @endif

        </div>
        </div>



@endsection