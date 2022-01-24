<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="author">
        <title>車両一覧</title>
        <link rel="stylesheet" href="/css/carView.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/styles/reset.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}">
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
        <div class="displayArea">
            <h1 class="pageTitle">登録車両一覧</h1>
            <div class="search">
                <form action="/carViewSearch" method="get">
                    <input type="text" class="searchText" name="search" id="search" value="" placeholder="車種名を入力して検索">
                    <button type="submit" class="searchKeyword">上記キーワードで検索</button>
                    <!-- <input type="button" class="searchMore" name="searchMore" value="その他の検索条件を指定する"> -->
                </form>
            </div>
            <div class="carViewAll">
                <div class="carViewArea">
                    @forelse($carList as $id => $vehicle)
                    <div class="carBox">
                        <img src="{{ asset('storage/images/'.$vehicle->getImagePass())}}" class="carImage">
                        <div class="nameArea">
                            <p class="carName">{{$vehicle->getVehicleName()}}</p>
                            <a href="/vehicleDetail/{{$vehicle->getId()}}" class="searchMoreLink">この車の詳細情報を見る</a>
                            <div class="carViewAbout">
                                <p class="carViewAboutMargin">車両年式：{{$vehicle->getModelYear()}}</p>
                                <p class="carViewAboutMargin">走行距離：{{$vehicle->getMileage()}}</p>
                                <p class="carViewAboutMargin">排気量：{{$vehicle->getEngineDisplacement()}}</p>
                                <p class="carViewAboutMargin">燃料区分：{{$vehicle->getFuel()}}</p>
                                <p class="carViewAboutMargin">車両メーカー：{{$vehicle->getMaker()}}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="carBoxEmpty">
                        <p class="empty">検索結果が見つかりません。</p>
                    </div>
                    @endforelse
                </div>
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
