<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/mypage.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrapの導入 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>

    </title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dogfacility.index') }}">Dogfacility</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            @if(Auth::check())
            <li class="nav-item">
                <a href=" {{ route('dogfacility.create')}}" class="nav-link"><i class="fas fa-pen">投稿する</i></a>
            </li>
            <li class="nav-item">
                <a href=" {{ route('user.show')}}" class="nav-link"><i class="fas fa-pen">マイページ</i></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" name="logout">
            @csrf
                </form>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.guest') }}" tabindex="-1" aria-disabled="true">ゲストログイン</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('login')}}">ログイン</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('register')}}" tabindex="-1" aria-disabled="true">会員登録</a>
            </li>
        </ul>
        @endif
    </div>
</div>
</nav>
</header>
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
<footer class="py-2 bg-dark">
    <div class="container">
        <p class="text-white text-center mt-2">Copyright © 2022 Tsubasa Ushikai All Rights Reserved.</p>
    </div>
</footer>
</html>