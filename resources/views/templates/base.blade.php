<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>

    <link rel="stylesheet" href={{asset('css/header.css')}}>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="shortcut icon" href="img/logo-ico.ico" type="image/x-icon">

    <script type="javascript" src={{asset('js/index.js')}}></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        function showFxd(){
            let dropList = $('.drop-list');
            dropList.css('visibility','visible');
            dropList.css('opacity','1');
            $('.li-menu').css('opacity','1');

        }
        function hideFxd(){
            let dropList = $('.drop-list');
            dropList.css('visibility','hidden');
            dropList.css('opacity','0');
            $('.li-menu').css('opacity','0');
        }
    </script>

</head>
<body>
<header>
    <div class="wrapper">
        <div class="header-menu">
            <div class="menu-bmt" id = "Fxd" onclick="showFxd()"><span></span><span></span><span></span></div>

            <div class='fxd_menu'>
                <div class="wrp_menu">
                    <div class='ext_from_menu' ></div>

                </div>
            </div>
            <div class="drop-list-menu">
                <div class="drop-list">
                    <div>
                        <div class="logo_wrp">
                            <div class='logo'>Logo</div>
                            <div class='ext' onclick="hideFxd()">X</div>
                        </div>
                        <div class='ui_wrp'>
                            <ul>
                                <li class="index-gradient index-menu li-menu"><a href="/"></a>Головна</li>
                                <li class="index-gradient book-menu li-menu"><a href="/books"></a>Книги</li>
                                <li class="index-gradient podcast-menu li-menu"><a href="/podcasts"></a>Подкасти</li>
                                <li class="index-gradient sport-menu li-menu"><a href="/sport"></a>Спорт</li>
                                <li class="index-gradient about-us-menu li-menu"><a href="/about"></a>Про нас</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">@yield('pageName')</div>
{{--        <div class="log-in-block">Log-in/registr</div>--}}
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Особистий кабінет</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Ввійти</a>
                    <a> / </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Зареєструватись</a>
                    @endif
                @endauth
            </div>
        @endif

    </div>

</header>
    <main>
        @yield('main')
    </main>
</body>
</html>
