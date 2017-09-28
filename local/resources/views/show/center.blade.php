@extends('layouts.app')

@section('content')

    <section class="cats d-none d-md-block">
        <div class="container">
            <div class="row justify-content-center">


                <div id="sort1" class="col-5 p-3">

                    @foreach($types->where('cat_id','=', $catId) as $index => $type)
                        @if($index < 10)
                            @if($index == 5)
                                <br>
                                <br>
                            @endif

                            <a class="link link-type mx-md-2" href="" id="{{$index}}" flag="0">
                                <img class="logo-type" src="/uploads/types/{{ $type->img_path }}" width="50" height="50" style="filter:invert(1);" alt="">
                            </a>
                        @endif

                    @endforeach
                </div>

                @if($catId == 0)
                    <div id="main" class="col-auto p-1 p-md-5 text-center d-flex flex-row align-items-center" style="background: white;">
                        <span>
                            <img class="logo-cat" src="/img/logo/logo.png" width="80" height="80" alt="">
                        </span>
                    </div>
                @endif
                @if($catId == 2)
                <div id="femalecol" class="col-auto p-1 p-md-5 text-center" style="background: #E19075;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/female.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Женская одежда</h2>--}}
                    </span>
                </div>
                @endif
                @if($catId == 3)
                <div id="childcol" class="col-auto p-1 p-md-5 text-center" style="background: #C46FA8;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/child.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Детская одежда</h2>--}}
                    </span>
                </div>
                @endif
                @if($catId == 1)
                <div id="malecol" class="col-auto p-1 p-md-5 text-center" style="background: #27A8E0;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/male.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Мужская одежда</h2>--}}
                    </span>
                </div>
                @endif

                    <div id="sort2" class="col-5 p-3 d-flex flex-row justify-content-end">
                        @foreach($types->where('cat_id','=', $catId) as $index => $type)
                            @if($index > 9)
                                @if($index == 15)
                                    <br>
                                    <br>
                                @endif

                                <a class="link link-type mx-md-2" href=""><img class="logo-type" src="/uploads/types/{{ $type->img_path }}" width="50" height="50" style="filter:invert(1);" alt=""></a>
                            @endif

                        @endforeach

                    </div>




            </div>
        </div>
    </section>
    @include('slider')

<div id="show">

    <h2 class="text-center pt-4">{{ $center->name }}</h2>
        <div class="container py-md-5 py-3 container-spec">

            @if($is_boutics)
            <div class="row">
                <div class="col-2  bg-light"></div>
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
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#{{ $i }}" role="tab" aria-controls="home" aria-expanded="true">{{ $i + 1 }}</a>
                                    </li>
                                    <input type="hidden" value="{{ $l = 1 }}">
                                    <input type="hidden" value="{{ $active = $i }}">
                                    @break
                                @elseif($i + 1 == $boutic->stage && $l = 1)
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#{{ $i }}" role="tab" aria-controls="profile">{{ $i + 1 }}</a>
                                    </li>
                                    @break
                                @endif
                            @endforeach

                        @endfor
                    </ul></div>
                <div class="col bg-light px-5 d-flex flex-row align-items-center"><p class="m-0 font-weight-bold">Этажи</p></div>
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
                            <div class="tab-pane fade show active" id="{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                @foreach ($boutics as $boutic)

                                    @if($boutic->stage == $i + 1)
                                    <div class="col-4 p-2 col-md-3 my-4 my-md-5">
                                        <a class="boutic-in-center" href="/profile/{{ $boutic->user_id }}"><img style="width: 100%; height: auto;" class=""  src="/uploads/avatars/{{ $boutic->img_path }}" alt="">
                                            <p class="text-center text-dark">{{ $boutic->name }}</p>
                                        </a>
                                    </div>
                                    @endif

                                @endforeach
                                </div>
                            </div>
                        @else
                            <div class="tab-pane fade" id="{{ $i }}" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                @foreach ($boutics as $boutic)

                                    @if($boutic->stage == $i + 1)
                                        <div class="col-3">
                                            <a href="/profile/{{ $boutic->user_id }}">
                                                <img width="150" height="150" class="rounded-circle"  src="/uploads/avatars/{{ $boutic->img_path }}" alt="">
                                                <p class="text-center my-2">{{ $boutic->name }}</p>
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