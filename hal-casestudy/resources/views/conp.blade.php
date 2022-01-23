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
        <h2>以下の内容で車両登録が完了しました。</h2>
        <table class="contact-table">
            <tr>
                <th class="contact-item">車両番号</th>
                <td class="contact-body">
                    {{$id}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">車両名</th>
                <td class="contact-body">
                    {{$vehicle_name}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">画像</th>
                <td class="contact-body">
                    <img src="{{ asset('storage/images/'.$image_pass) }}">
                </td>
            </tr>
            <tr>
                <th class="contact-item">型式</th>
                <td class="contact-body">
                    {{$car_id}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">仕入れ価格</th>
                <td class="contact-body">
                    {{$buying_price}}円
                </td>
            </tr>
            <tr>
                <th class="contact-item">年式</th>
                <td class="contact-body">
                    {{$model_year}}年
                </td>
            </tr>
            <tr>
                <th class="contact-item">走行距離</th>
                <td class="contact-body">
                    {{$mileage}}km
                </td>
            </tr>
            <tr>
                <th class="contact-item">排気量</th>
                <td class="contact-body">
                    {{$engine_displacement}}cc
                </td>
            </tr>
            <tr>
                <th class="contact-item">車検日(次回)</th>
                <td class="contact-body">
                    {{$inspection_date}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">外装色</th>
                <td class="contact-body">
                    {{$exterior_color}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">内装色</th>
                <td class="contact-body">
                    {{$interior_color}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">カラーNo</th>
                <td class="contact-body">
                    {{$color_code}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">車体番号</th>
                <td class="contact-body">
                    {{$vehicle_identification_number}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">評価点</th>
                <td class="contact-body">
                    {{$score}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">新車保証書</th>
                <td class="contact-body">
                    {{$warranty_document}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">取扱説明書</th>
                <td class="contact-body">
                    {{$manual}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">燃料</th>
                <td class="contact-body">
                    {{$fuel}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">車の種類</th>
                <td class="contact-body">
                    {{$car_type_id}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">エアコン</th>
                <td class="contact-body">
                    {{$air_conditioning}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">シフトレバー</th>
                <td class="contact-body">
                    {{$shift_lever}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">所在地</th>
                <td class="contact-body">
                    {{$location}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">検査済みか</th>
                <td class="contact-body">
                    {{$inspection}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">メーカー</th>
                <td class="contact-body">
                    {{$maker}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">自動車区分</th>
                <td class="contact-body">
                    {{$car_model}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">オプション</th>
                <td class="contact-body">
                    {{$option}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">オークション登録</th>
                <td class="contact-body">
                    {{$auction_join}}
                </td>
            </tr>
            <tr>
                <th class="contact-item">備考</th>
                <td class="contact-body">
                    {{$remarks}}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>