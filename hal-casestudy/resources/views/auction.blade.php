<?php
    $price = 100000;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles/reset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auction.css') }}">
    <title>オークション画面</title>
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
    <h1>オークション画面</h1>
    <div id="nav">
        <p>車両名 {{ $vehicle->getVehicleName() }} </p>
    </div>
    <div id="main">
        <div id="left">
            <img src="{{ asset('storage/images/'.$vehicle->getImagePass()) }}">
        </div>
        <div id="right">
            <div class="timer" id="timer"></div>
            <div id="price_text">現在の価格: <p id="price">{{$price}}</p>円</div>
            <button class="button2" type="button" onclick="onClick();">入札</button>
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
                    <td>{{ $vehicle->getModelYear() }}年</td>
                    <th>カラーNo</th>
                    <td>{{ $vehicle->getColorCode() }}</td>
                </tr>
                <tr>
                    <th>走行</th>
                    <td>{{ $vehicle->getMileage() }}km</td>
                    <th>車の種類</th>
                    <td>{{ $vehicle->getCarTypeId() }}</td>
                </tr>
                <tr>
                    <th>排気量</th>
                    <td>{{ $vehicle->getEngineDisplacement() }}cc</td>
                    <th>車体番号</th>
                    <td>{{ $vehicle->getVehicleIdentificationNumber() }}</td>
                </tr>
                <tr>
                    <th>車検日</th>
                    <td>{{ $vehicle->getInspectionDate() }}</td>
                    <th>評価点</th>
                    <td>{{ $vehicle->getScore() }}</td>
                </tr>
                <tr>
                    <th>外装色</th>
                    <td>{{ $vehicle->getExteriorColor() }}</td>
                    <th>燃料</th>
                    <td>{{ $vehicle->getFuel() }}</td>
                </tr>
                <tr>
                    <th>内装色</th>
                    <td>{{ $vehicle->getInteriorColor() }}</td>
                    <th>型式</th>
                    <td>{{ $vehicle->getCarId() }}</td>
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
                    <td>
                        @if(strpos($option->getOptionName(), 'PS') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                    <th>PW（パワーウインド）</th>
                    <td>
                        @if(strpos($option->getOptionName(), 'PW') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>AW（サンルーフ）</th>
                    <td>
                        @if(strpos($option->getOptionName(), 'AW') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                    <th>背面タイヤ</th>
                    <td>
                        @if(strpos($option->getOptionName(), '背面タイヤ') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>カワ（本革シート）</th>
                    <td>
                        @if(strpos($option->getOptionName(), 'カワ') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                    <th>AB（エアーバック）</th>
                    <td>
                        @if(strpos($option->getOptionName(), 'AB') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>TV（テレビ）</th>
                    <td>
                        @if(strpos($option->getOptionName(), 'TV') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                    <th>ナビ（カーナビ）</th>
                    <td>
                        @if(strpos($option->getOptionName(), 'ナビ') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Rスポ（リヤースボイラ）</th>
                    <td>
                        @if(strpos($option->getOptionName(), 'Rスポ') !== false)
                            <p>〇</p>
                        @endif
                    </td>
                    <th></th>
                    <td></td>
                </tr>
            </tbody>
        </table>
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
    <script src="{{ asset('/js/auction.js') }}"></script>
</body>
</html>