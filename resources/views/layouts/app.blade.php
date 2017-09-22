<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

</head>
<body id="body" @if(Session::get('catId') == 0)
                    style="background-color: #fefefe;"
                @elseif(Session::get('catId') == 1)
                    style="background-color: #86C4DF;"
                @elseif(Session::get('catId') == 2)
                    style="background-color: #E69275;"
                @elseif(Session::get('catId') == 3)
                    style="background-color: #C69DB9;"
                @endif>
    <header>
        <img class="fixed-top" src="/img/menu/menu.png" alt="" width="100%" height="10px" style="margin-top: 59px;">
        <nav class="navbar fixed-top navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo/logo.png" width="30" height="30" alt=""> | Floop <h1 style="display: none;">Floop</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    {{ Auth::user()->name }}

                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @if(Auth::user()->is_boutic)

                                        <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">Профиль</a>

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


    </header>

    <div class="content-m">

        @yield('content')

    </div>

    <footer class="py-4 text-dark">
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
</body>
</html>
