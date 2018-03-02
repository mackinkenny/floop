<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" href="/img/logo/logo.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/logo/logo.png"/>
    <meta name="msapplication-square70x70logo" content="/img/logo/logo.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/img/logo/Floop.ico" type="image/x-icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

</head>
<body id="body">
    {{--<div id="preloader" class="d-md-none w-100 h-100 fixed-top bg-dark container">--}}
        {{--<img class="logo" src="/img/logo/logo2.png" width="288" height="80" alt="" style="width: 144px; height: 40px; -webkit-transform: translate(95px, 150px);-moz-transform: translate(95px, 150px);-ms-transform: translate(95px, 150px);-o-transform: translate(95px, 150px);transform: translate(95px, 150px);">--}}

        {{--<div id="circleG" style="-webkit-transform: translateY(520px);-moz-transform: translateY(520px);-ms-transform: translateY(520px);-o-transform: translateY(520px);transform: translateY(520px);">--}}
            {{--<div id="circleG_1" class="circleG"></div>--}}
            {{--<div id="circleG_2" class="circleG"></div>--}}
            {{--<div id="circleG_3" class="circleG"></div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <header>
        <img class="fixed-shadow fixed-top" src="/img/menu/menu.png" alt="" width="100%" height="10px">
        <nav class="navbar fixed-top navbar-expand-md" id="navbar-top">
            <div class="container">
                <a id="menu-mobile" class=" d-md-none">
                @if(Session::get('catId') == 0)
                        <img class="menu d-md-none" src="/img/logo/menu1.png" width="30" height="30" alt=""></a>
                @elseif(Session::get('catId') == 1)
                    <img class="d-md-none" src="/img/logo/menu.png" width="30" height="30" alt=""></a>
                @elseif(Session::get('catId') == 2)
                    <img class="d-md-none" src="/img/logo/menu2.png" width="30" height="30" alt=""></a>
                @elseif(Session::get('catId') == 3)
                    <img class="d-md-none" src="/img/logo/menu3.png" width="30" height="30" alt=""></a>
                @endif
                <img class="menum d-none d-md-none" src="/img/logo/menu.png"  width="30" height="30" alt=""></a>
                <img class="menuf d-none d-md-none" src="/img/logo/menu2.png" width="30" height="30" alt=""></a>
                <img class="menuc d-none d-md-none" src="/img/logo/menu3.png" width="30" height="30" alt=""></a>
                <a class="navbar-brand mx-auto mx-md-0" href="/">
                    @if(Session::get('catId') == 0)
                        <img class="logo" src="/img/logo/logo5.png" width="108" height="30" alt="">
                    @elseif(Session::get('catId') == 1)
                        <img class="logom" src="/img/logo/logo2.png" width="108" height="30" alt="">
                    @elseif(Session::get('catId') == 2)
                        <img class="logof" src="/img/logo/logo3.png" width="108" height="30" alt="">
                    @elseif(Session::get('catId') == 3)
                        <img class="logoc" src="/img/logo/logo4.png" width="108" height="30" alt="">
                    @endif
                    <img class="logom d-none" src="/img/logo/logo2.png" width="108" height="30" alt="">
                    <img class="logof d-none" src="/img/logo/logo3.png" width="108" height="30" alt="">
                    <img class="logoc d-none" src="/img/logo/logo4.png" width="108" height="30" alt="">
                </a>
                @if(Session::get('catId') == 0)
                    <a href="" class="search d-md-none"><img src="/img/logo/search.png" width="30" height="30" alt=""></a>
                @elseif(Session::get('catId') == 1)
                    <a href="" class="searchm d-md-none"><img src="/img/logo/search1.png" width="30" height="30" alt=""></a>
                @elseif(Session::get('catId') == 2)
                    <a href="" class="searchf d-md-none"><img src="/img/logo/search2.png" width="30" height="30" alt=""></a>
                @elseif(Session::get('catId') == 3)
                    <a href="" class="searchc d-md-none"><img src="/img/logo/search3.png" width="30" height="30" alt=""></a>
                @endif
                <a href="" class="searchm d-none d-md-none"><img src="/img/logo/search1.png" width="30" height="30" alt=""></a>
                <a href="" class="searchf d-none d-md-none"><img src="/img/logo/search2.png" width="30" height="30" alt=""></a>
                <a href="" class="searchc d-none d-md-none"><img src="/img/logo/search3.png" width="30" height="30" alt=""></a>


                <div class="collapse navbar-collapse"  id="navbarNavDropdown">
                    <form class="form-inline my-2 my-lg-0 mx-auto">
                        {{--<input class="form-control mr-sm-2 text-center" type="text" placeholder="Поиск" aria-label="Search" style="border-radius: 50px;">--}}
                        {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>--}}
                        <div class="input-group">
                            @if(Session::get('catId') == 0)
                                <input type="text" style=" border-right: 0px;" class="form-control menu-change ml-5 text-center bg-white rounded-circle-our  input-group-addon main2 main1" placeholder="Поиск" aria-label="Username" aria-describedby="basic-addon1">
                                <span style="border-left: 0px;" class="input-group-addon rounded-circle-our main2 main1" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            @elseif(Session::get('catId') == 1)
                                <input type="text" style="border-right: 0px;" class="form-control menu-change  ml-5 text-center bg-white rounded-circle-our  input-group-addon male2" placeholder="Поиск" aria-label="Username" aria-describedby="basic-addon1">
                                <span style="border-left: 0px; " class="input-group-addon rounded-circle-our male1 male2" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            @elseif(Session::get('catId') == 2)
                                <input type="text" style="border-right: 0px;" class="form-control menu-change ml-5 text-center bg-white rounded-circle-our  input-group-addon female2" placeholder="Поиск" aria-label="Username" aria-describedby="basic-addon1">
                                <span style="border-left: 0px;" class="input-group-addon rounded-circle-our female1 female2" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            @elseif(Session::get('catId') == 3)
                                <input type="text" style="border-right: 0px;" class="form-control menu-change ml-5 text-center bg-white rounded-circle-our  input-group-addon child2" placeholder="Поиск" aria-label="Username" aria-describedby="basic-addon1">
                                <span style="border-left: 0px;" class="input-group-addon rounded-circle-our child1 child2" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>

                            @endif
                                    </div>

                    </form>
                    <ul class="navbar-nav ">
                        @if (Auth::guest())
                            @if(Session::get('catId') == 0)
                                <li class="nav-item mr-2"><a class="nav-link text-uppercase fs-15 rounded-circle-our  text-standard main1 main2"  href="{{ route('login') }}">Вход</a></li>
                                <li class="nav-item"><a class="nav-link text-uppercase fs-15 rounded-circle-our  text-standard main1 main2" href="{{ route('register') }}">Регистрация</a></li>
                            @elseif(Session::get('catId') == 1)
                                <li class="nav-item mr-2"><a class="nav-link text-uppercase fs-15 rounded-circle-our text-light male1" href="{{ route('login') }}">Вход</a></li>
                                <li class="nav-item"><a class="nav-link text-uppercase fs-15 rounded-circle-our text-light male1"href="{{ route('register') }}">Регистрация</a></li>
                            @elseif(Session::get('catId') == 2)
                                <li class="nav-item mr-2"><a class="nav-link text-uppercase fs-15 rounded-circle-our text-light female1" href="{{ route('login') }}">Вход</a></li>
                                <li class="nav-item"><a class="nav-link text-uppercase fs-15 rounded-circle-our text-light female1" href="{{ route('register') }}">Регистрация</a></li>
                            @elseif(Session::get('catId') == 3)
                                <li class="nav-item mr-2"><a class="nav-link text-uppercase fs-15 rounded-circle-our text-light child1"  href="{{ route('login') }}">Вход</a></li>
                                <li class="nav-item"><a class="nav-link text-uppercase fs-15 rounded-circle-our text-light child1"  href="{{ route('register') }}">Регистрация</a></li>
                            @endif
                           @else
                            <li class="nav-item d-flex flex-row align-items-center">
                            @if(Session::get('catId') == 0)
                                <a href="{{ route('sdiscounts') }}"><img class="logo" src="/img/logo/percent.png" style="width:30px;" alt=""></a>
                            @elseif(Session::get('catId') == 1)
                                <a href="{{ route('sdiscounts') }}"><img class="logom" src="/img/logo/percent.png" style="width:30px;" alt=""></a>
                            @elseif(Session::get('catId') == 2)
                               <a href="{{ route('sdiscounts') }}"><img class="logof" src="/img/logo/percent3.png" style="width:30px;" alt=""></a>
                            @elseif(Session::get('catId') == 3)
                              <a href="{{ route('sdiscounts') }}"><img class="logoc" src="/img/logo/percent4.png" style="width:30px;" alt=""></a>
                            @endif
                                <a href="{{ route('sdiscounts') }}"><img class="logom d-none" src="/img/logo/percent1.png" style="width:30px;" alt=""></a>
                                <a href="{{ route('sdiscounts') }}"><img class="logof d-none" src="/img/logo/percent3.png" style="width:30px;" alt=""></a>
                                <a href="{{ route('sdiscounts') }}"><img class="logoc d-none" src="/img/logo/percent4.png" style="width:30px;" alt=""></a>
                             </li>
                            <li class="nav-item dropdown row align-items-center ml-3">
                                @if(Session::get('catId') == 0)
                                    <a style="margin-right: -15px; letter-spacing: 1px;" class="text-standard nav-link dropdown-toggle p-1 px-4 user-drop main2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <img src="/uploads/avatars/{{ Auth::user()->img_path }}" class="rounded-circle main2" width="40" height="40" alt="">
                                @elseif(Session::get('catId') == 1)
                                    <a style="margin-right: -15px; letter-spacing: 1px; border-top-left-radius: 35px;border-bottom-left-radius: 35px;" class="text-male nav-link dropdown-toggle p-1 px-4 male1 male2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <img src="/uploads/avatars/{{ Auth::user()->img_path }}" class="rounded-circle male2" width="40" height="40" alt="">
                                @elseif(Session::get('catId') == 2)
                                    <a style="margin-right: -15px; letter-spacing: 1px; border-top-left-radius: 35px;border-bottom-left-radius: 35px;" class="text-female nav-link dropdown-toggle p-1 px-4 female1 female2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <img src="/uploads/avatars/{{ Auth::user()->img_path }}" class="rounded-circle female2"  width="40" height="40" alt="">
                                @elseif(Session::get('catId') == 3)
                                    <a style="margin-right: -15px; letter-spacing: 1px; border-top-left-radius: 35px;border-bottom-left-radius: 35px;" class="text-child nav-link dropdown-toggle p-1 px-4 child1 child2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <img src="/uploads/avatars/{{ Auth::user()->img_path }}" class="rounded-circle child2"  width="40" height="40" alt="">
                                @endif




                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @if(Auth::user()->is_boutic)

                                        <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">Профиль</a>

                                        <a class="dropdown-item" href="/bset/{{ Auth::user()->id }}">Настройки</a>

                                        <a class="dropdown-item" href="/panel/{{ Auth::user()->id }}">Панель управления</a>


                                    @else

                                        <a class="dropdown-item" href="{{  route('profile') }}">Профиль</a>

                                    @endif
                                    @if(Auth::user()->admin)

                                        <a class="dropdown-item" href="{{ route('admin') }}">Админка</a>

                                    @endif

                                    <a class="dropdown-item" href=" {{ route('notice') }}">Уведомления</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>


                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        <nav class="d-md-none navbar fixed-bottom navbar-expand-md">
            <img class="fixed-bottom" src="/img/menu/menu2.png" alt="" width="100%" height="10px" style="margin-bottom: 56px;">
            <div class="container d-flex flex-row justify-content-center">
                <a class="navbar-brand mx-4" href="/">
                    @if(Session::get('catId') == 0)
                        <img class="home" src="/img/logo/home.png" width="30" height="30" alt="">
                    @elseif(Session::get('catId') == 1)
                        <img src="/img/logo/home1.png" width="30" height="30" alt="">
                    @elseif(Session::get('catId') == 2)
                        <img src="/img/logo/home2.png" width="30" height="30" alt="">
                    @elseif(Session::get('catId') == 3)
                        <img src="/img/logo/home3.png" width="30" height="30" alt="">
                    @endif
                    <img class="homem d-none" src="/img/logo/home1.png" width="30" height="30" alt="">
                    <img class="homef d-none" src="/img/logo/home2.png" width="30" height="30" alt="">
                    <img class="homec d-none" src="/img/logo/home3.png" width="30" height="30" alt="">
                </a>
                <a class="navbar-brand mx-4" href="/sdiscounts">
                    @if(Session::get('catId') == 0)
                        <img class="percent" src="/img/logo/percent.png" width="30" height="30" alt="">
                    @elseif(Session::get('catId') == 1)
                        <img src="/img/logo/percent1.png" width="30" height="30" alt="">
                    @elseif(Session::get('catId') == 2)
                        <img src="/img/logo/percent3.png" width="30" height="30" alt="">
                    @elseif(Session::get('catId') == 3)
                        <img src="/img/logo/percent4.png" width="30" height="30" alt="">
                    @endif
                    <img class="percentm d-none" src="/img/logo/percent1.png" width="30" height="30" alt="">
                    <img class="percentf d-none" src="/img/logo/percent3.png" width="30" height="30" alt="">
                    <img class="percentc d-none" src="/img/logo/percent4.png" width="30" height="30" alt="">
                </a>
                @if(Auth::user())
                    @if(Auth::user()->is_boutic)
                        <a class="navbar-brand mx-4" href="/profile/{{Auth::user()->id}}">
                            @if(Session::get('catId') == 0)
                                <img class="profile" src="/img/logo/profile.png" width="30" height="30" alt="">
                            @elseif(Session::get('catId') == 1)
                                <img src="/img/logo/profile1.png" width="30" height="30" alt="">
                            @elseif(Session::get('catId') == 2)
                                <img src="/img/logo/profile3.png" width="30" height="30" alt="">
                            @elseif(Session::get('catId') == 3)
                                <img src="/img/logo/profile2.png" width="30" height="30" alt="">
                            @endif
                            <img class="profilem d-none" src="/img/logo/profile1.png" width="30" height="30" alt="">
                            <img class="profilec d-none" src="/img/logo/profile2.png" width="30" height="30" alt="">
                            <img class="profilef d-none" src="/img/logo/profile3.png" width="30" height="30" alt="">
                        </a>
                    @else
                        <a class="navbar-brand mx-4" href="{{  route('profile') }}">
                            @if(Session::get('catId') == 0)
                                <img class="profile" src="/img/logo/profile.png" width="30" height="30" alt="">
                            @elseif(Session::get('catId') == 1)
                                <img src="/img/logo/profile1.png" width="30" height="30" alt="">
                            @elseif(Session::get('catId') == 2)
                                <img src="/img/logo/profile3.png" width="30" height="30" alt="">
                            @elseif(Session::get('catId') == 3)
                                <img src="/img/logo/profile2.png" width="30" height="30" alt="">
                            @endif
                            <img class="profilem d-none" src="/img/logo/profile1.png" width="30" height="30" alt="">
                            <img class="profilec d-none" src="/img/logo/profile2.png" width="30" height="30" alt="">
                            <img class="profilef d-none" src="/img/logo/profile3.png" width="30" height="30" alt="">
                        </a>
                    @endif
                    @else
                    <a class="navbar-brand mx-4" href="{{  url('/login') }}">
                        @if(Session::get('catId') == 0)
                            <img class="profile" src="/img/logo/profile.png" width="30" height="30" alt="">
                        @elseif(Session::get('catId') == 1)
                            <img src="/img/logo/profile1.png" width="30" height="30" alt="">
                        @elseif(Session::get('catId') == 2)
                            <img src="/img/logo/profile3.png" width="30" height="30" alt="">
                        @elseif(Session::get('catId') == 3)
                            <img src="/img/logo/profile2.png" width="30" height="30" alt="">
                        @endif
                        <img class="profilem d-none" src="/img/logo/profile1.png" width="30" height="30" alt="">
                        <img class="profilec d-none" src="/img/logo/profile2.png" width="30" height="30" alt="">
                        <img class="profilef d-none" src="/img/logo/profile3.png" width="30" height="30" alt="">
                    </a>
                    @endif
            </div>

        </nav>

        <div id="backdrop" class="backdrop fixed-top w-100 h-100">/</div>

        <nav class="d-md-none d-none fixed-top w-50 h-100 text-light" id="nav-mobile">
            <ul class="nav flex-column my-5 px-3">
                <span style="text-align: right; margin-top: -35px;" class="mb-4"><i class="fa fa-times" aria-hidden="true"></i></span>
                <li class="nav-item">
                    <a class="nav-link text-light active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                </li>
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('login') }}">Вход</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('register') }}">Регистрация</a></li>
                @else
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Выйти</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif


            </ul>
        </nav>

    </header>

    <div class="content-m">

        @yield('content')

    </div>

    <footer class="py-4 text-dark d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Политика конфиденциальности</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Выход</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/main2.js"></script>
    <script src="/js/main3.js"></script>
    <script src="/js/main4.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}
    <script type="text/javascript">
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
        });
    </script>
    <script>
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',']
        })
    </script>

    <script>
        $(window).on('load', function () {
            $('#preloader').fadeOut()
        })
    </script>
</body>
</html>
