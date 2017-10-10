<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

</head>
<body id="body" @if(Session::get('catId') == 0)
                    style="background-color: #D8D9D9;"
                @elseif(Session::get('catId') == 1)
                    style="background-color: #86C4DF;"
                @elseif(Session::get('catId') == 2)
                    style="background-color: #E19075;"
                @elseif(Session::get('catId') == 3)
                    style="background-color: #C69DB9;"
                @endif>
    <div id="preloader" class="d-md-none w-100 h-100 fixed-top bg-dark container">
        {{--<img class="logo" src="/img/logo/logo2.png" width="288" height="80" alt="" style="width: 144px; height: 40px; -webkit-transform: translate(95px, 150px);-moz-transform: translate(95px, 150px);-ms-transform: translate(95px, 150px);-o-transform: translate(95px, 150px);transform: translate(95px, 150px);">--}}

        <div id="circleG" style="-webkit-transform: translateY(520px);-moz-transform: translateY(520px);-ms-transform: translateY(520px);-o-transform: translateY(520px);transform: translateY(520px);">
            <div id="circleG_1" class="circleG"></div>
            <div id="circleG_2" class="circleG"></div>
            <div id="circleG_3" class="circleG"></div>
        </div>
    </div>

    <header>
        <img class="fixed-shadow fixed-top" src="/img/menu/menu.png" alt="" width="100%" height="10px">
        <nav class="navbar fixed-top navbar-expand-md">
            <div class="container">
                <a id="menu-mobile" class="mr-5 d-md-none"><img src="/img/logo/menu.png" width="20" height="20" alt=""></a>
                <a class="navbar-brand mx-auto mx-md-0" href="/">
                    <img class="logo" src="/img/logo/logo2.png" width="108" height="30" alt=""><h1 style="display: none;">Floop</h1>
                </a>
                <a href="" class="mx-1 d-md-none"><img src="/img/logo/search.png" width="20" height="20" alt=""></a>


                <div class="collapse navbar-collapse"  id="navbarNavDropdown">
                    <form class="form-inline my-2 my-lg-0 mx-auto">
                        <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search" style="border-radius: 50px;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    <ul class="navbar-nav ">
                        @if (Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Вход</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Регистрация</a></li>
                        @else
                            <div class="form-inline my-auto"><a href="{{ route('sdiscounts') }}"><img src="/img/logo/percent.png" style="width:30px;" alt=""></a></div>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    {{ Auth::user()->name }}

                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @if(Auth::user()->is_boutic)

                                        <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">Профиль</a>

                                        <a class="dropdown-item" href="/bset/{{ Auth::user()->id }}">Настройки</a>


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
                    <img src="/img/logo/home.png" width="25" height="25" alt="">
                </a>
                <a class="navbar-brand mx-4" href="/">
                    <img src="/img/logo/buy.png" width="25" height="25" alt="">
                </a>
                @if(Auth::user())
                    @if(Auth::user()->is_boutic)
                        <a class="navbar-brand mx-4" href="/profile/{{Auth::user()->id}}">
                            <img src="/img/logo/profile.png" width="25" height="25" alt="">
                        </a>
                    @else
                    <a class="navbar-brand mx-4" href="{{  route('profile') }}">
                        <img src="/img/logo/profile.png" width="25" height="25" alt="">
                    </a>
                    @endif
                    @else
                    <a class="navbar-brand mx-4" href="{{ url('/login') }}">
                        <img src="/img/logo/profile.png" width="25" height="25" alt="">
                    </a>
                    @endif
            </div>

        </nav>

        <div id="backdrop" class="backdrop fixed-top w-100 h-100">/</div>

        <nav class="d-md-none fixed-top w-50 h-100 text-light" id="nav-mobile">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="/js/main2.js"></script>
    <script src="/js/main3.js"></script>
    <script src="/js/main4.js"></script>
    <script src="/js/main5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
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
