<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <nav class="navbar navbar-expand-md navbar-dark bg-warning shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dogfacility.index') }}">Dogfacility</a>
                    <ul class="navbar-nav ml-auto">
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
                        <a href="#" class="nav-link"><i class="fas fa-pen">ゲストログイン</i></a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('login')}}" class="nav-link"><i class="fas fa-pen">ログイン</i></a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('register')}}" class="nav-link"><i class="fas fa-pen">会員登録</i></a>
                    </li>
                            </div>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>