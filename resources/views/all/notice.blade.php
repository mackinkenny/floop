@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @if(Auth::user()->is_boutic)
            @foreach($notices as $notice)
            <div class="col-md-11 col-md-offset-2">
                @if($notice->text_id == 0)
                    <a href="/profile/{{ $notice->user->id }}"><div class="col-lg-1"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a> <div class="col-lg-6"><strong>{{ $notice->user->name }}</strong> понравилась ваша публикация <strong>{{ $notice->product->name }}</strong> </div><a href="{{ route('showProduct', $notice->product->id) }}" id="link"><div class="col-lg-1"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" width="30px"alt=""></div></a>
                <br>
                @endif
                    @if($notice->text_id == 1)
                        <a href="/profile/{{ $notice->user->id }}"><div class="col-lg-1"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a><div class="col-lg-6"><strong>{{ $notice->user->name }}</strong> добавил(-а) в корзину товар: <strong>{{ $notice->product->name }}</strong> </div><a href="{{ route('showProduct', $notice->product->id) }}" id="link"><div class="col-lg-1"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" width="30px"alt=""></div></a>
                        <br>
                    @endif
                    @if($notice->text_id == 2)
                        <a href="/profile/{{ $notice->user->id }}"><div class="col-lg-1"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a> <div class="col-lg-6"><strong>{{ $notice->user->name }}</strong> подписался(-ась) на ваши обновления.</div>
                        <br>
                    @endif

                    @if($notice->text_id == 3)
                        <a href="/profile/{{ $notice->user->id }}"><div class="col-lg-1"><img class="img-responsive" src="/uploads/avatars/{{ $notice->user->img_path }}" width="30px"></div></a> <div class="col-lg-6"><strong>{{ $notice->user->name }}</strong> прокомментировал(-а) вашу публикацию: {{ $notice->comment->comment }}</div><a href="{{ route('showProduct', $notice->product->id) }}" id="link"><div class="col-lg-1"><img class="img-responsive" src="/uploads/images/products/{{ $notice->product->img_path }}" width="30px"alt=""></div></a>
                        <br>
                    @endif
            </div>
                <br>
                    <br>
            @endforeach
                @else
            У вас нет уведомлений!
                @endif

        </div>
        </div>



@endsection