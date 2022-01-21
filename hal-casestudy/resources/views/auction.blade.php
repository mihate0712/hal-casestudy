<?php
    $price = 100000;
?>

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
    </div>
    <div id="main">
        <div id="left">
            <img src="{{ asset('images/auction.jpg')}}">
        </div>
        <div id="right">
            <div class="timer" id="timer"></div>
            <div id="price_text">現在の価格: <p id="price">{{$price}}</p>円</div>
            <button class="button" type="button" onclick="onClick();">入札</button>
        </div>
    </div>
    <div id="spec">
        <table>
            <thead>
                <th colspan="4">基本情報</th>
            </thead>
            <tbody>
                <tr>
                    <th>年式</th>
                    <td>2020年</td>
                    <th>駆動方式</th>
                    <td>2WD</td>
                </tr>
                <tr>
                    <th>走行</th>
                    <td>0.8万km</td>
                    <th>ボディタイプ</th>
                    <td>セダン</td>
                </tr>
                <tr>
                    <th>排気量</th>
                    <td>1800cc</td>
                    <th>ミッション</th>
                    <td>AT</td>
                </tr>
                <tr>
                    <th>車検</th>
                    <td>2023年4月</td>
                    <th>色</th>
                    <td>シルバー</td>
                </tr>
                <tr>
                    <th>乗車定員</th>
                    <td>5</td>
                    <th>ハンドル</th>
                    <td>右</td>
                </tr>
                <tr>
                    <th>燃料</th>
                    <td>ガソリン</td>
                    <th>型式</th>
                    <td>DAA-ZVW51</td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <th colspan="4">オプション</th>
            </thead>
            <tbody>
                <tr>
                    <th>PS（パワー捨て）</th>
                    <td></td>
                    <th>PW（パワーウインド）</th>
                    <td>〇</td>
                </tr>
                <tr>
                    <th>AW（サンルーフ）</th>
                    <td></td>
                    <th>背面タイヤ</th>
                    <td></td>
                </tr>
                <tr>
                    <th>カワ（本革シート）</th>
                    <td></td>
                    <th>AB（エアーバック）</th>
                    <td></td>
                </tr>
                <tr>
                    <th>TV（テレビ）</th>
                    <td></td>
                    <th>ナビ（カーナビ）</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Rスポ（リヤースボイラ）</th>
                    <td></td>
                    <th></th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>フッター部分</footer>
    <script src="{{ asset('/js/auction.js') }}"></script>
</body>
</html>