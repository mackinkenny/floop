@extends('layouts.app')

@section('content')


    <section class="cats d-none d-md-block"
             @if(Session::get('catId') == 0)
                style="background-color: #fefefe;"
             @elseif(Session::get('catId') == 1)
                 style="background-color: #27a8e1;"
             @elseif(Session::get('catId') == 2)
                style="background-color: #E19075;"
             @elseif(Session::get('catId') == 3)
                 style="background-color: #c46fa8;"
            @endif>
        <div class="container">
            <div class="row">


                <div id="sort" class="col-4 pt-5 text-right">
                    <input type="hidden" value="{{ $i = 0 }}">
                    @if($count%2 == 0)
                        @foreach($maintypes->where('cat_id','=', $catId) as $index => $maintype)
                            @if($i < $count/2)
                                <a class="link link2-type mx-md-2" href="" id="{{ $maintype->id }}">
                                    <img class="logo-type" title="{{ $maintype->name }}" src="/uploads/maintypes/{{ $maintype->img_path }}" width="55" height="55" alt="" style="opacity: 0">
                                </a>
                            @endif
                                <input type="hidden" value="{{ $i++ }}">
                        @endforeach
                    @else
                        @foreach($maintypes->where('cat_id','=', $catId) as $index => $maintype)
                            @if($i < ($count + 1)/2)
                                <a class="link link2-type mx-md-2" href="" id="{{ $maintype->id }}">
                                    <img class="logo-type" title="{{ $maintype->name }}" src="/uploads/maintypes/{{ $maintype->img_path }}" width="55" height="55" alt="">
                                </a>
                            @endif
                                <input type="hidden" value="{{ $i++ }}">
                        @endforeach
                    @endif






                    {{--<input type="hidden" value="{{ $i = 0 }}">--}}
                    {{--@foreach($types->where('cat_id','=', $catId) as $index => $type)--}}
                        {{--@if($i < 10)--}}
                            {{--@if($i == 5)--}}
                                {{--<br>--}}
                                {{--<br>--}}
                            {{--@endif--}}

                            {{--<a class="link link-type mx-md-2" href="" id="{{ $type->id }}">--}}
                                {{--<img class="logo-type" title="{{ $type->name }}" src="/uploads/types/{{ $type->img_path }}" width="50" height="50" alt="">--}}
                            {{--</a>--}}
                        {{--@endif--}}

                            {{--<input type="hidden" {{ $i++ }}>--}}
                    {{--@endforeach--}}
                </div>

                @if($catId == 0)
                    <div id="main" class="logs col-auto p-1 p-md-5 mx-auto text-center d-flex flex-row align-items-center" style="background: #fefefe;">
                        <span>
                            <img class="logo-cat" src="/img/logo/logo.png" width="80" height="80" alt="">
                        </span>
                    </div>
                @endif
                @if($catId == 2)
                <div id="femalecol" class="logs col-auto p-1 p-md-5 mx-auto text-center" style="background: #E19075;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/female.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Женская одежда</h2>--}}
                    </span>
                </div>
                @endif
                @if($catId == 3)
                <div id="childcol" class="logs col-auto p-1 p-md-5 mx-auto text-center" style="background: #c46fa8;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/child.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Детская одежда</h2>--}}
                    </span>
                </div>
                @endif
                @if($catId == 1)
                <div id="malecol" class="logs col-auto p-1 p-md-5 mx-auto text-center" style="background: #27a8e1;">
                    <span style="color:white">
                        <img class="logo-cat" src="/img/cats/male.png" width="60" height="60" alt="">
                        {{--<h2 style="font-size: 1rem;">Мужская одежда</h2>--}}
                    </span>
                </div>
                @endif

                    <div id="sort2" class="col-4 pt-5 text-left">

                        @if($count%2 == 0)
                            <input type="hidden" value="{{ $i = $count/2  }}">
                            @foreach($maintypes->where('cat_id','=', $catId) as $index => $maintype)
                                @if($index > $count/2-1)
                                    <a class="link link2-type mx-md-2" href="" id="{{ $maintype->id }}">
                                        <img class="logo-type" title="{{ $maintype->name }}" src="/uploads/maintypes/{{ $maintype->img_path }}" width="55" height="55" alt="">
                                    </a>
                                @endif
                                <input type="hidden" value="{{ $i++ }}">
                            @endforeach
                        @else
                            <input type="hidden" value="{{ $i = ($count + 1)/2  }}">
                            @foreach($maintypes->where('cat_id','=', $catId) as $index => $maintype)
                                @if($index > ($count -1)/2)
                                    <a class="link link2-type mx-md-2" href="" id="{{ $maintype->id }}">
                                        <img class="logo-type" title="{{ $maintype->name }}" src="/uploads/maintypes/{{ $maintype->img_path }}" width="55" height="55" alt="">
                                    </a>
                                @endif
                                <input type="hidden" value="{{ $i++ }}">
                            @endforeach
                        @endif






                        {{--<input type="hidden" value="{{ $i = 0 }}">--}}
                        {{--@foreach($types->where('cat_id','=', $catId) as $index => $type)--}}
                            {{--@if($i > 9)--}}
                                {{--@if($i == 15)--}}
                                    {{--<br>--}}
                                    {{--<br>--}}
                                {{--@endif--}}

                                {{--<a class="link link-type mx-md-2" href="" id="{{ $type->id }}">--}}
                                    {{--<img title="{{ $type->name }}" class="logo-type" src="/uploads/types/{{ $type->img_path }}" width="50" height="50" alt="">--}}
                                {{--</a>--}}
                            {{--@endif--}}
                                {{--<input type="hidden" value="{{ $i++ }}">--}}
                            {{--@if($i > 19)--}}
                                {{--@break--}}
                            {{--@endif--}}
                        {{--@endforeach--}}

                    </div>




            </div>
        </div>
        <div id="subtypes" class="d-none w-auto">
        </div>
    </section>
<div id="slider" class="">
    @include('slider')
</div>

    

<div id="show">


    <input type="hidden" value="{{ $center->id }}" id="idcenter">
    <div class="d-none container py-md-5 py-3 container-spec" id="containerWithBouticsinCenternone">
        <div class="row"></div>
    </div>
        <div class="container py-md-5 py-3 container-spec" id="containerWithBouticsinCenter">

            @if($is_boutics)
            <div class="row">
                <div class="col-2 br-r py-md-3 py-1 d-flex flex-row justify-content-center align-items-center"><p class="m-0 fs-20 text-uppercase">Этажи</p></div>
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
                <div class="col bl-r px-3 px-md-5 py-md-3 py-1 d-flex flex-row align-items-center" id="rekt"><p class="text-center fs-20 text-uppercase m-0 font-weight-bold">{{ $center->name }}</p></div>
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
                                    <div class=" col-4 p-2 col-md-3 my-4 my-md-4">
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