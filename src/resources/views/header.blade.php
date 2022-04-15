
<div class='fixed-top'>
                <nav class="navbar navbar-expand-lg navbar-light">
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
                @endif
                </ul>
                </div>
            </div>
        </nav>
    </div>