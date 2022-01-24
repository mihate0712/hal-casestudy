<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles/reset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}">
    <title>TOP画面</title>
</head>
<body>
<<<<<<< HEAD
    <header>ヘッダー部分</header>
    <nav>
        登録車両一覧、車両検索は<a href="/carView">こちら</a>から
    </nav>
=======
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <div class="site-header__start">
            <a href="#" class="brand">Brand</a>
            </div>
            <div class="site-header__middle">
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button">
                menu
                </button>
                <ul class="nav__wrapper">
                <li class="nav__item"><a href="/">ホーム</a></li>
                <li class="nav__item"><a href="/auction">オークション</a></li>
                <li class="nav__item"><a href="/carView">車両一覧</a></li>
                </ul>
            </nav>
            </div>
            <div class="site-header__end">
            <a class="button" href="/login">ログイン</a>
            <a class="button" href="/user_register">新規登録</a>
            </div>
        </div>
    </header>
    <!-- <nav>
        <form action="" method="get">
            <input type="search" name="search" id="search" placeholder="キーワードを入力">
            <input type="submit" name="submit" id="submit" value="検索">
        </form>
        <p id="syousai">詳細検索は<input type="button" value="こちら"></p>
    </nav> -->
>>>>>>> 1cc4ff863a6f12319b25363eb52b74505ec6bd7a
    <h1><img src="{{ asset('images/main_sales.jpg')}}"></h1>
    <h2>あなたにオススメ</h2>
    <div class="flex">
        @foreach($carList as $id => $vehicle)
        <div class="carBox">
            <img src="{{ asset('storage/images/'.$vehicle->getImagePass())}}" class="carImage" width="200px">
            <div class="nameArea">
                <p class="carName">{{$vehicle->getVehicleName()}}</p>
                <a href="/vehicleDetail/{{$vehicle->getId()}}" class="searchMoreLink">この車の詳細情報を見る</a>
                <p>車両年式：{{$vehicle->getModelYear()}}</p>
                <p>走行距離：{{$vehicle->getMileage()}}</p>
                <p>排気量：{{$vehicle->getEngineDisplacement()}}</p>
                <p>燃料区分：{{$vehicle->getFuel()}}</p>
                <p>車両メーカー：{{$vehicle->getMaker()}}</p>
            </div>
        </div>
        @endforeach
        <!-- <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>おすすめだ</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>おすすめだね</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>おすすめ</p>
            </a>
        </div> -->
    </div>
    <h2>人気車両ランキング</h2>
    <div class="flex">
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>人気No1</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>人気No2</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>人気No3</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>人気No4</p>
            </a>
        </div>
    </div>
    <h2>今週開催のオークション</h2>
    <div class="content2">
        <a href="/">
            <img id="ork" src="{{ asset('images/sub.jpg')}}">
        </a>
    </div>
    <h2>今後開催予定のオークション</h2>
    <div class="flex">
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>1月15日開催予定</p>
                <p>車種名</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>1月15日開催予定</p>
                <p>車種名</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>1月15日開催予定</p>
                <p>車種名</p>
            </a>
        </div>
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>1月15日開催予定</p>
                <p>車種名</p>
            </a>
        </div>
    </div>
    <footer id="footer01" class="footer outer-block">
      <div class="logo">
        <a href="">
          <img src="img/logo" alt="">
        </a>
      </div>
      <ul class="nav">
        <li><a href="/">ホーム</a></li>
        <li><a href="/auction">オークション</a></li>
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
