<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="author">
        <title>車両詳細</title>
        <link rel="stylesheet" href="/css/vehicleDetail.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/styles/reset.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}">
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
                <li class="nav__item"><a href="/auction">オークション</a></li>
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
        <div class="displayArea">
            <h1 class="pageTitle">DAIHATSU WAKE</h1>
            <div class="carImages">
                <div class="carImageMain">
                    <img src="{{ asset('storage/images/'.$vehicle->getImagePass())}}" class="carImageFirst">
                </div>
            </div>
            <div class="details">
                <h2 class="carName">車両名：{{$vehicle->getVehicleName()}}</h2>
                <table class="carDetail">
                    <tr>
                        <th class="th">車両年式</th>
                        <td class="td">{{$vehicle->getModelYear()}}年</td>
                    </tr>
                    <tr>
                        <th class="th">走行距離</th>
                        <td class="td">{{$vehicle->getMileage()}}万Km</td>
                    </tr>
                    <tr>
                        <th class="th">排気量</th>
                        <td class="td">{{$vehicle->getEngineDisplacement()}}cc</td>
                    </tr>
                    <tr>
                        <th class="th">次回車検日</th>
                        <td class="td">{{$vehicle->getInspectionDate()}}</td>
                    </tr>
                    <tr>
                        <th class="th">外装色</th>
                        <td class="td">{{$vehicle->getExteriorColor()}}</td>
                    </tr>
                    <tr>
                        <th class="th">内装色</th>
                        <td class="td">{{$vehicle->getInteriorColor()}}</td>
                    </tr>
                    <tr>
                        <th class="th">車体番号</th>
                        <td class="td">{{$vehicle->getVehicleIdentificationNumber()}}</td>
                    </tr>
                    <tr>
                        <th class="th">新車保証書の有無</th>
                        <td class="td">{{$warranty_document}}</td>
                    </tr>
                    <tr>
                        <th class="th">取扱説明書の有無</th>
                        <td class="td">{{$manual}}</td>
                    </tr>
                    <tr>
                        <th class="th">燃料区分</th>
                        <td class="td">{{$fuel}}</td>
                    </tr>
                    <tr>
                        <th class="th">AT／MT区分</th>
                        <td class="td">{{$car_type_id}}</td>
                    </tr>
                    <tr>
                        <th class="th">エアコンID</th>
                        <td class="td">{{$air_conditioning}}</td>
                    </tr>
                    <tr>
                        <th class="th">シフトレバー</th>
                        <td class="td">{{$shift_lever}}</td>
                    </tr>
                    <tr>
                        <th class="th">車の所在地</th>
                        <td class="td">{{$vehicle->getLocation()}}</td>
                    </tr>
                    <tr>
                        <th class="th">検査済みの有無</th>
                        <td class="td">{{$inspection}}</td>
                    </tr>
                    <tr>
                        <th class="th">車のメーカー</th>
                        <td class="td">{{$vehicle->getMaker()}}</td>
                    </tr>
                    <tr>
                        <th class="th">軽自動車などの区分</th>
                        <td class="td">{{$vehicle->getCarModel()}}</td>
                    </tr>
                    <tr>
                        <th class="th">備考</th>
                        <td class="td">{{$vehicle->getRemarks()}}</td>
                    </tr>
                    <tr>
                        <th class="th">オークション出品状況</th>
                        <td class="td">{{$auction_join}}</td>
                    </tr>
                </table>
            </div>
            <div class="buttons">
                <a href="#" class="searchAlike" name="searchAlike">似た形式の車両を探す</a><br>
                @if($auction_join == "オークション登録済み(次回土曜日出品予定)")
                    <a href="#" class="goToAuction" name="goToAuction">オークション画面に遷移する</a><br>
                @else
                    <a href="/insertAuction/{{$vehicle->getId()}}" class="goAuction" name="goAuction">この車両をオークションに登録する</a><br>
                @endif
                <a href="/carView" class="back" name="back">車両一覧画面に戻る</a>
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
