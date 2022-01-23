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
                <li class="nav__item"><a href="#">ホーム</a></li>
                <li class="nav__item"><a href="#">オークション</a></li>
                <li class="nav__item"><a href="#">車両一覧</a></li>
                </ul>
            </nav>
            </div>
            <div class="site-header__end">
            <a class="button" href="#">ログイン</a>
            <a class="button" href="#">新規登録</a>
            </div>
        </div>
    </header>
    <nav>
        <form action="" method="get">
            <input type="search" name="search" id="search" placeholder="キーワードを入力">
            <input type="submit" name="submit" id="submit" value="検索">
        </form>
        <p id="syousai">詳細検索は<input type="button" value="こちら"></p>
    </nav>
    <h1><img src="{{ asset('images/main.jpg')}}"></h1>
    <h2>あなたにオススメ</h2>
    <div class="flex">
        <div class="content">
            <a href="/">
                <img src="{{ asset('images/sub.jpg')}}">
                <p>おすすめだよ</p>
            </a>
        </div>
        <div class="content">
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
        </div>
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
        <li><a href="">ホーム</a></li>
        <li><a href="">オークション</a></li>
        <li><a href="">車両一覧</a></li>
        <li><a href="">利用規約</a></li>
        <li><a href="">コンタクト</a></li>
      </ul>
      <p class="copyright">
        MASARU MOTOR © HAL Inc.
      </p>
    </footer>
</body>
</html>
