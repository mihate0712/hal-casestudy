<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="author">
        <title>車両一覧</title>
        <link rel="stylesheet" href="/css/carView.css" type="text/css">
    </head>
    <body>
        <header>
            ヘッダーです。
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
                        <img src="./images/{{$vehicle->getImagePass()}}.jpg" class="carImage">
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
                    @empty
                    <div class="carBoxEmpty">
                        <p class="empty">検索結果が見つかりません。</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        <footer>
            ふったーだよ
        </footer>
    </body>
</html>
