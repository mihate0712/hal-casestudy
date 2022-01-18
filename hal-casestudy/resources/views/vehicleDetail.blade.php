<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="author">
        <title>車両詳細</title>
        <link rel="stylesheet" href="/css/vehicleDetail.css" type="text/css">
    </head>
    <body>
        <header>
            ヘッダーです。
        </header>
        <div class="displayArea">
            <h1 class="pageTitle">DAIHATSU WAKE</h1>
            <div class="carImages">
                <div class="carImageMain">
                    <img src="/images/{{$vehicle->getImagePass()}}.jpg" class="carImageFirst">
                </div>
            </div>
            <div class="details">
                <h2 class="carName">車両名：{{$vehicle->getVehicleName()}}</h2>
                <table class="carDetail">
                    <tr>
                        <th class="th">車両年式</th>
                        <td class="td">{{$vehicle->getModelYear()}}</td>
                    </tr>
                    <tr>
                        <th class="th">走行距離</th>
                        <td class="td">{{$vehicle->getMileage()}}</td>
                    </tr>
                    <tr>
                        <th class="th">排気量</th>
                        <td class="td">{{$vehicle->getEngineDisplacement()}}</td>
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
                        <td class="td">{{$vehicle->getWarrantyDocument()}}</td>
                    </tr>
                    <tr>
                        <th class="th">取扱説明書の有無</th>
                        <td class="td">{{$vehicle->getManual()}}</td>
                    </tr>
                    <tr>
                        <th class="th">燃料区分</th>
                        <td class="td">{{$vehicle->getFuel()}}</td>
                    </tr>
                    <tr>
                        <th class="th">AT／MT区分</th>
                        <td class="td">{{$vehicle->getCarTypeId()}}</td>
                    </tr>
                    <tr>
                        <th class="th">エアコンID</th>
                        <td class="td">{{$vehicle->getAirConditioning()}}</td>
                    </tr>
                    <tr>
                        <th class="th">シフトレバー</th>
                        <td class="td">{{$vehicle->getShiftLever()}}</td>
                    </tr>
                    <tr>
                        <th class="th">車の所在地</th>
                        <td class="td">{{$vehicle->getLocation()}}</td>
                    </tr>
                    <tr>
                        <th class="th">検査済みの有無</th>
                        <td class="td">{{$vehicle->getInspection()}}</td>
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
                        <td class="td">{{$vehicle->getAuctionJoin()}}</td>
                    </tr>
                </table>
            </div>
            <div class="buttons">
                <a href="#" class="searchAlike" name="searchAlike">似た形式の車両を探す</a><br>
                <a href="#" class="goToAuction" name="goToAuction">オークション画面に遷移する</a><br>
                <a href="/carView" class="back" name="back">車両一覧画面に戻る</a>
            </div>
        </div>
        <footer>
            ふったーだよ
        </footer>
    </body>
</html>
