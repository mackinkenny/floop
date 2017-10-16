@extends('layouts.app')

@section('content')


    <section class="cats d-none d-md-block">
        <div class="container">
            <div class="row">


                <div id="sort" class="col-5 p-3">
                    <input type="hidden" value="{{ $i = 0 }}">
                    @foreach($types->where('cat_id','=', $catId) as $index => $type)
                        @if($i < 10)
                            @if($i == 5)
                                <br>
                                <br>
                            @endif

                            <a class="link link-type mx-md-2" href="" id="{{ $type->id }}">
                                <img class="logo-type" title="{{ $type->name }}" src="/uploads/types/{{ $type->img_path }}" width="50" height="50" alt="">
                            </a>
                        @endif

                            <input type="hidden" {{ $i++ }}>
                    @endforeach
                </div>

                @if($catId == 0)
                    <div id="main" class="col-auto p-1 p-md-5 mx-auto text-center d-flex flex-row align-items-center" style="background: #D8D9D9;">
                        <span>
                            <img class="logo-cat" src="/img/logo/logo.png" width="80" height="80" alt="">
                        </span>
                    </div>
                @endif
                @if($catId == 2)
                <div id="femalecol" class="col-auto p-1 p-md-5 mx-auto text-center" style="background: #E19075;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/female.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Женская одежда</h2>--}}
                    </span>
                </div>
                @endif
                @if($catId == 3)
                <div id="childcol" class="col-auto p-1 p-md-5 mx-auto text-center" style="background: #C46FA8;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/child.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Детская одежда</h2>--}}
                    </span>
                </div>
                @endif
                @if($catId == 1)
                <div id="malecol" class="col-auto p-1 p-md-5 mx-auto text-center" style="background: #86C4DF;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/male.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Мужская одежда</h2>--}}
                    </span>
                </div>
                @endif

                    <div id="sort2" class="col-5 p-3 text-right">
                        <input type="hidden" value="{{ $i = 0 }}">
                        @foreach($types->where('cat_id','=', $catId) as $index => $type)
                            @if($i > 9)
                                @if($i == 15)
                                    <br>
                                    <br>
                                @endif

                                <a class="link link-type mx-md-2" href="" id="{{ $type->id }}">
                                    <img title="{{ $type->name }}" class="logo-type" src="/uploads/types/{{ $type->img_path }}" width="50" height="50" alt="">
                                </a>
                            @endif
                                <input type="hidden" value="{{ $i++ }}">
                            @if($i > 19)
                                @break
                            @endif
                        @endforeach

                    </div>




            </div>
        </div>
    </section>
    @include('slider')
    <div class="d-md-none">
        @if(Session::get('catId') == 1)
            <img src="/img/slider/male.jpg" class="w-100" alt="">
        @elseif(Session::get('catId') == 2)
            <img src="/img/slider/female.jpg" class="w-100" alt="">
        @elseif(Session::get('catId') == 3)
            <img src="/img/slider/child.jpg" class="w-100" alt="">
        @elseif(Session::get('catId') == 0)
            <img src="/img/slider/female.jpg" class="w-100" alt="">
        @endif
    </div>
    

<div id="show">


    <input type="hidden" value="{{ $center->id }}" id="idcenter">
    <div class="d-none container py-md-5 py-3 container-spec" id="containerWithBouticsinCenternone">
        <div class="row"></div>
    </div>
        <div class="container py-md-5 py-3 container-spec" id="containerWithBouticsinCenter">

            @if($is_boutics)
            <div class="row">
                <div class="col-2 bg-light br-r py-md-3 py-1 d-flex flex-row justify-content-center align-items-center"><p class="m-0 fs-20 text-uppercase">Этажи</p></div>
                <div class="col-auto px-5"><ul class="row nav nav-tabs" id="myTab" role="tablist">
                        {{--@foreach($center->boutics as $index => $boutic)--}}
                        {{--{{ dd($boutic->where('stage', '=', 2)->first()) }}--}}
                        {{--@if($boutic->stage == $index + 1)--}}
                        {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" id="home-tab" data-toggle="tab" href="#{{ $index }}" role="tab" aria-controls="home" aria-expanded="true">{{ $index + 1 }}</a>--}}
                        {{--</li>--}}
                        {{--@endif--}}

                        {{--@endforeach--}}
                        <input type="hidden" value="{{ $l = 0 }}">
                        @for($i = 0; $i < $center->max_stages; $i++)
                            @foreach($boutics as $boutic)
                                @if($l == 0 && $i + 1 == $boutic->stage)
                                    <li class="nav-item">
                                        <a class="nav-link active" id="{{ $i }}-tab" data-toggle="tab" href="#{{ $i }}-show" role="tab" aria-controls="{{ $i }}" aria-expanded="true">{{ $i + 1 }}</a>
                                    </li>
                                    <input type="hidden" value="{{ $l = 1 }}">
                                    <input type="hidden" value="{{ $active = $i }}">
                                    @break
                                @elseif($i + 1 == $boutic->stage && $l = 1)
                                    <li class="nav-item">
                                        <a class="nav-link" id="{{ $i }}-tab" data-toggle="tab" href="#{{ $i }}-show" role="tab" aria-controls="{{ $i }}">{{ $i + 1 }}</a>
                                    </li>
                                    @break
                                @endif
                            @endforeach

                        @endfor
                    </ul></div>
                <div class="col bl-r bg-light px-3 px-md-5 py-md-3 py-1 d-flex flex-row align-items-center" id="rekt"><p class="text-center fs-20 text-uppercase m-0 font-weight-bold">{{ $center->name }}</p></div>
            </div>


                <div class=" tab-content p-md-5" id="myTabContent">

                    {{--@foreach($center->boutics as $index => $boutic)--}}

                        {{--@if($boutic->stage == $index + 1)--}}
                            {{--<div class="row tab-pane fade show" id="{{ $index }}" role="tabpanel" aria-labelledby="home-tab">--}}
                                {{--@foreach($center->boutics as $index => $boutic)--}}
                                    {{--<br>--}}

                                    {{--@if($boutic->stage == $index + 1)--}}
                                        {{--<br>        {{ $boutic->id }}--}}
                                        {{--<div class="col-auto">--}}
                                            {{--<a href="/profile/{{ $boutic->user_id }}">--}}
                                                {{--<img width="150" height="150" class="rounded-circle"  src="/uploads/avatars/{{ $boutic->img_path }}" alt="">--}}
                                                {{--<p class="text-center my-2">{{ $boutic->name }}</p>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--@endif--}}



                                {{--@endforeach--}}
                            {{--</div>--}}
                            {{--@endif--}}

                    {{--@endforeach--}}


                    @for($i = 0; $i < $center->max_stages; $i++)

                        @if($i == $active)
                            <div class="tab-pane fade show active" id="{{ $i }}-show" role="tabpanel" aria-labelledby="{{ $i }}-tab">
                                <div class="row">

                                @foreach ($boutics as $boutic)
                                    @if($boutic->stage == $i + 1)
                                    <div class="col-4 p-2 col-md-3 my-4 my-md-4">
                                        <a class="boutic-in-center" href="/profile/{{ $boutic->user_id }}">
                                            <img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/{{ $boutic->img_path }}" alt="">
                                            <p class="text-center text-dark">{{ $boutic->name }}</p>
                                        </a>
                                    </div>
                                    @endif

                                @endforeach
                                </div>
                            </div>
                        @else
                            <div class="tab-pane fade" id="{{ $i }}-show" role="tabpanel" aria-labelledby="{{ $i }}-tab">
                                <div class="row">
                                @foreach ($boutics as $boutic)

                                    @if($boutic->stage == $i + 1)
                                        <div class="col-4 p-2 col-md-3 my-4 my-md-4">
                                            <a class="boutic-in-center" href="/profile/{{ $boutic->user_id }}">
                                                <img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/{{ $boutic->img_path }}" alt="">
                                                <p class="text-center text-dark">{{ $boutic->name }}</p>
                                            </a>
                                        </div>
                                    @endif

                                @endforeach
                                </div>
                            </div>
                        @endif

                    @endfor

                </div>
            @endif


            {{--<div class="row">--}}
                {{--<br>--}}
                {{--<br>--}}


                {{--@foreach($center->boutics as $boutic)--}}

                    {{--<div class="col-auto">--}}
                        {{--<a href="/profile/{{ $boutic->user_id }}">--}}
                            {{--<img width="150" height="150" class="rounded-circle"  src="/uploads/avatars/{{ $boutic->img_path }}" alt="">--}}
                            {{--<p class="text-center my-2">{{ $boutic->name }}</p>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--@endforeach--}}

            {{--</div>--}}
        </div>


</div>

@endsection