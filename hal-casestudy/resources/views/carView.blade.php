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
                <form>
                    <input type="text" class="searchText" name="search" value="" placeholder="キーワードを入力して検索">
                    <input type="button" class="searchKeyword" name="searchKeyword" value="上記キーワードで検索">
                    <input type="button" class="searchMore" name="searchMore" value="その他の検索条件を指定する">
                </form>
            </div>
            <div class="carViewAll">
                <div class="carViewArea">
                    @forelse($carList as $id => $vehicle)
                    <div class="carBox">
                        <img src="./images/{{$vehicle->getImagePass}}.jpg" class="carImage">
                        <p class="carName">{{$vehicle->getVehicleName()}}</p>
                    </div>
                    @endforelse
                    <div class="carBox">
                    <img src="./images/test.jpg" class="carImage">
                        <p class="carName">DAIHATSU TANTO</p>
                    </div>
                </div>
            </div>
            <div class="pager">
                <a href="#" class="pagerBack">前へ</a>
                <a href="#" class="pagerNumber">1</a>
                <a href="#" class="pagerNumber">2</a>
                <a href="#" class="pagerNumber">3</a>
                <a href="#" class="pagerNumber">4</a>
                <a href="#" class="pagerNumber">5</a>
                <a href="#" class="pagerNext">次へ</a>
            </div>
        </div>
        <footer>
            ふったーだよ
        </footer>
    </body>
</html>
