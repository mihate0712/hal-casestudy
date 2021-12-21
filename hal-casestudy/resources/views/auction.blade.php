<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auction.css') }}">
    <title>オークション画面</title>
</head>
<body>
    <header>ヘッダー部分</header>
    <h1>オークション画面</h1>
    <div id="nav">
        <p>車両名 トヨタプリウス（型式 DAA-ZVW51）
        <p>オークション中（ステータス）</p>
    </div>
    <h2 id="main">
        <img src="{{ asset('images/auction.jpg')}}">
        <div id="spec">
            <p>基本情報</p>
            <dl>
                <dt>年式</dt>
                <dd>2020年</dd>
                <dt>走行</dt>
                <dd>0.8万km</dd>
                <dt>排気量</dt>
                <dd>1800cc</dd>
                <dt>車検</dt>
                <dd>2023年4月</dd>
                <dt>乗車定員</dt>
                <dd>5</dd>
                <dt>燃料</dt>
                <dd>ガソリン</dd>
                <dt>駆動方式</dt>
                <dd>2WD</dd>
                <dt>ボディタイプ</dt>
                <dd>セダン</dd>
                <dt>ミッション</dt>
                <dd>AT</dd>
                <dt>色</dt>
                <dd>シルバー</dd>
                <dt>ハンドル</dt>
                <dd>右</dd>
                <dt>車歴</dt>
                <dd>自家用車</dd>
                <dt>型式</dt>
                <dd>DAA-ZVW51</dd>
                <dt>ドア数</dt>
                <dd>5</dd>
            </dl>
        </div>
    </h2>
</body>
</html>