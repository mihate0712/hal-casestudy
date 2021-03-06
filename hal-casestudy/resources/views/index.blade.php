<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles/reset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <title>TOP画面</title>
</head>
<body>
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <div class="site-header__start">
            <a href="/" class="brand"><img src="{{ asset('images/logo.png')}}" class="logo"></a>
            </div>
            <div class="site-header__middle">
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button">
                menu
                </button>
                <ul class="nav__wrapper">
                <li class="nav__item"><a href="/">ホーム</a></li>
                @if($session == 1)
                    <li class="nav__item"><a href="/auction">オークション</a></li>
                @endif
                <li class="nav__item"><a href="/carView">車両一覧</a></li>
                </ul>
            </nav>
            </div>
            @if($session == 1)
                <div class="site-header__end">
                    <a class="button" href="/vehicle_register">車両新規登録</a>
                    <a class="button" href="/logout">ログアウト</a>
                </div>
            @else
                <div class="site-header__end">
                    <a class="button" href="/login">ログイン</a>
                    <a class="button" href="/user_register">新規登録</a>
                </div>
            @endif
        </div>
    </header>
    <h1><img class="main" src="{{ asset('images/main_sales.jpg')}}"></h1>
    <h2>あなたにオススメ</h2>
    <div class="flex">
        @foreach($carList as $id => $vehicle)
        <div class="content">
            <img src="{{ asset('storage/images/'.$vehicle->getImagePass())}}" class="carImage">
            <div class="nameArea">
                <p class="carName">{{$vehicle->getVehicleName()}}</p>
                <a href="/vehicleDetail/{{$vehicle->getId()}}" class="searchMoreLink">この車の詳細情報を見る</a>
            </div>
        </div>
        @endforeach
    </div>
    <h2>今週開催のオークション</h2>
    <div class="content2">
        <a href="/auction/1">
            <img id="ork" src="{{ asset('images/sub.jpg')}}">
        </a>
    </div>
    <footer id="footer01" class="footer outer-block">
      <div class="logo">
        <a href="">
          <img src="img/logo" alt="">
        </a>
      </div>
      <ul class="nav">
        <li><a href="/">ホーム</a></li>
        @if($session == 1)
            <li><a href="/auction">オークション</a></li>
            <li><a href="/vehicle_register">車両新規登録</a></li>
        @else
            <li><a href="/user_register">新規会員登録</a></li>
            <li><a href="/login">ログイン</a></li>
        @endif
        <li><a href="/carView">車両一覧</a></li>
        <li><a href="">利用規約</a></li>
        <li><a href="">コンタクト</a></li>
      </ul>
      <p class="copyright">
        MASARU MOTOR © HAL Inc.
      </p>
    </footer>
</body>
</html>
