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
    <h1><img src="{{ asset('images/main.jpg')}}"></h1>
    <h2>あなたにオススメ</h2>
    <div class="flex">
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>おすすめだよ</p>
        </div>
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>おすすめだ</p>
        </div>
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>おすすめだね</p>
        </div>
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>おすすめ</p>
        </div>
    </div>
    <h2>人気車両ランキング</h2>
    <div class="flex">
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>人気No1</p>
        </div>
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>人気No2</p>
        </div>
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>人気No3</p>
        </div>
        <div class="content">
            <img src="{{ asset('images/sub.jpg')}}">
            <p>人気No4</p>
        </div>
    </div>
    <h2>今週開催のオークション</h2>
    <div class="content2">
        <img id="ork" src="{{ asset('images/ork.jpg')}}">
    </div>
</body>
</html>