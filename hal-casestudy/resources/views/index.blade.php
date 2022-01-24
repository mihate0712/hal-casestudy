<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <title>TOP画面</title>
</head>
<body>
    <header>ヘッダー部分</header>
    <nav>
        登録車両一覧、車両検索は<a href="/carView">こちら</a>から
    </nav>
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
    <footer>フッター部分</footer>
</body>
</html>
