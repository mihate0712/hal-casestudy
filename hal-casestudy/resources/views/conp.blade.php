<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/vehicle_register.css') }}">
    <title>車両登録</title>
</head>
<body>
    <div class="contact">
        <h1 class="contact-ttl">新規車両登録</h1>
        <form action="/vehicle_register" method="post">
            <table class="contact-table">
                <tr>
                    <th class="contact-item">車両番号</th>
                    <td class="contact-body"></td>
                </tr>
                <tr>
                    <th class="contact-item">車両名</th>
                    <td class="contact-body">
                        {{$vehicle_name}}
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">仕入れ価格</th>
                    <td class="contact-body">
                        {{$buying_price}}
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">年式</th>
                    <td class="contact-body">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">走行距離</th>
                    <td class="contact-body">
                        
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">排気量</th>
                    <td class="contact-body">
                        
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">車検日(次回)</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">外装色</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">内装色</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">カラーNo</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">車体番号</th>
                    <td class="contact-body">
                        
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">評価点</th>
                    <td class="contact-body">
                        
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">新車保証書</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">取扱説明書</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">燃料</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">車の種類</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">エアコン</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">シフトレバー</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">所在地</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">メーカー</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">自動車区分</th>
                    <td class="contact-body">

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">オプション</th>
                    <td class="contact-body">
                        
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">オークション登録</th>
                    <td class="contact-body">
                        
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">備考</th>
                    <td class="contact-body">

                    </td>
                </tr>
            </table>
            <input class="contact-submit"type="submit" value="登録する">
        </form>
    </div>
</body>
</html>