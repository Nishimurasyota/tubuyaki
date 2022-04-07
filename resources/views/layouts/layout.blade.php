<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header">
        @yield('header')
    </div>

    <div class="contents">
        <h1>@yield('title')</h1>

        <div class="sidebar">
            @yield("sidebar")
        </div>

        <div class="mainContent">
            @yield("mainContent")
        </div>
    </div>


    <div class="footer">
        @yield("footer")
    </div>



</body>

</html>
