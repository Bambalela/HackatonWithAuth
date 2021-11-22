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
                                <li class="index-gradient index-menu li-menu"><a href="/home"></a>Головна</li>
                                <li class="index-gradient book-menu li-menu"><a href="/books"></a>Книги</li>
                                <li class="index-gradient podcast-menu li-menu"><a href="/podcasts"></a>Подкасти</li>
                                <li class="index-gradient sport-menu li-menu"><a href="/sport"></a>Спорт</li>
                                <li class="index-gradient about-us-menu li-menu"><a href="/about-us"></a>Про нас</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">@yield('pageName')</div>
        <div class="log-in-block">Log-in/registr</div>

    </div>

</header>
    <main>
        @yield('main')
    </main>
<script type="text/javascript" src={{asset('js/header.js')}}></script>
<script type="javascript" src={{asset('js/index.js')}}></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
