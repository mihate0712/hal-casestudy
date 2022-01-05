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
        <form action="" method="post">
            <table class="contact-table">
                <tr>
                    <th class="contact-item">車両番号</th>
                    <td class="contact-body">001</td>
                </tr>
                <tr>
                    <th class="contact-item">車両名</th>
                    <td class="contact-body">
                        <input type="text" name="vehicle_name" id="vehicle_name" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">仕入れ価格</th>
                    <td class="contact-body">
                        <input type="number" name="buying_price" id="buying_price" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">年式</th>
                    <td class="contact-body">
                        <input type="number" name="model_year" id="model_year" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">走行距離</th>
                    <td class="contact-body">
                        <input type="number" name="mileage" id="mileage" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">排気量</th>
                    <td class="contact-body">
                        <input type="number" name="engine_displacement" id="engine_displacement" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">車検日(次回)</th>
                    <td class="contact-body">
                        <input type="date" name="inspection_date" id="inspection_date" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">外装色</th>
                    <td class="contact-body">
                        <input type="text" name="exterior_color" id="exterior_color" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">内装色</th>
                    <td class="contact-body">
                        <input type="text" name="interior_color" id="interior_color" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">カラーNo</th>
                    <td class="contact-body">
                        <input type="text" name="color_code" id="color_code" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">車体番号</th>
                    <td class="contact-body">
                        <input type="text" name="vehicle_identification_number" id="vehicle_identification_number" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">評価点</th>
                    <td class="contact-body">
                        <input type="text" name="score" id="score" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">新車保証書</th>
                    <td class="contact-body">
                        <label class="contact-warranty_document">
                            <input type="radio" name="warranty_document" value="0" checked />
                            <span class="contact-warranty_document-txt">あり</span>
                        </label>
                        <label class="contact-warranty_document">
                            <input type="radio" name="warranty_document" value="1"/>
                            <span class="contact-warranty_document-txt">なし</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">取扱説明書</th>
                    <td class="contact-body">
                        <label class="contact-manual">
                            <input type="radio" name="manual" value="0" checked />
                            <span class="contact-manualt-txt">あり</span>
                        </label>
                        <label class="contact-manual">
                            <input type="radio" name="manual" value="1"/>
                            <span class="contact-manual-txt">なし</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">燃料</th>
                    <td class="contact-body">
                        <label class="contact-fuel">
                            <input type="radio" name="fuel" value="0" checked />
                            <span class="contact-fuel-txt">ガソリン</span>
                        </label>
                        <label class="contact-fuel">
                            <input type="radio" name="fuel" value="1"/>
                            <span class="contact-fuel-txt">ハイオク</span>
                        </label>
                        <label class="contact-fuel">
                            <input type="radio" name="fuel" value="2"/>
                            <span class="contact-fuel-txt">軽油</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">車の種類</th>
                    <td class="contact-body">
                        <label class="contact-car_type_id">
                            <input type="radio" name="car_type_id" value="0" checked />
                            <span class="contact-car_type_id-txt">AT</span>
                        </label>
                        <label class="contact-car_type_id">
                            <input type="radio" name="car_type_id" value="1"/>
                            <span class="contact-car_type_id-txt">MT</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">エアコン</th>
                    <td class="contact-body">
                        <label class="contact-air_conditioning">
                            <input type="radio" name="air_conditioning" value="0" checked />
                            <span class="contact-air_conditioning-txt">AC</span>
                        </label>
                        <label class="contact-air_conditioning">
                            <input type="radio" name="air_conditioning" value="1"/>
                            <span class="contact-air_conditioning-txt">AAC</span>
                        </label>
                        <label class="contact-air_conditioning">
                            <input type="radio" name="air_conditioning" value="2"/>
                            <span class="contact-air_conditioning-txt">WAC</span>
                        </label>
                        <label class="contact-air_conditioning">
                            <input type="radio" name="air_conditioning" value="3"/>
                            <span class="contact-air_conditioning-txt">無</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">シフトレバー</th>
                    <td class="contact-body">
                        <label class="contact-shift_lever">
                            <input type="radio" name="shift_lever" value="0" checked />
                            <span class="contact-shift_lever-txt">フロア</span>
                        </label>
                        <label class="contact-shift_lever">
                            <input type="radio" name="shift_lever" value="1"/>
                            <span class="contact-shift_lever-txt">コラム</span>
                        </label>
                        <label class="contact-shift_lever">
                            <input type="radio" name="shift_lever" value="2"/>
                            <span class="contact-shift_lever-txt">インパネ</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">所在地</th>
                    <td class="contact-body">
                        <input type="text" name="location" id="location" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">メーカー</th>
                    <td class="contact-body">
                        <input type="text" name="maker" id="maker" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">自動車区分</th>
                    <td class="contact-body">
                        <input type="text" name="car_model" id="car_model" required>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">オプション</th>
                    <td class="contact-body">
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="0"/>
                            <span class="contact-option-txt">PS</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="1"/>
                            <span class="contact-option-txt">PW</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="2"/>
                            <span class="contact-option-txt">AW</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="3"/>
                            <span class="contact-option-txt">背面タイヤ</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="4"/>
                            <span class="contact-option-txt">カワ</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="5"/>
                            <span class="contact-option-txt">AB</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="6"/>
                            <span class="contact-option-txt">TV</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="7"/>
                            <span class="contact-option-txt">ナビ</span>
                        </label>
                        <label class="contact-option">
                            <input type="checkbox" name="option" value="8"/>
                            <span class="contact-option-txt">Rスポ</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">オークション登録</th>
                    <td class="contact-body">
                        <label class="contact-auction_join">
                            <input type="radio" name="auction_join" value="0" checked />
                            <span class="contact-auction_join-txt">あり</span>
                        </label>
                        <label class="contact-auction_join">
                            <input type="radio" name="auction_join" value="1"/>
                            <span class="contact-auction_join-txt">なし</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">備考</th>
                    <td class="contact-body">
                        <textarea class="form-textarea" name="remarks" id="remarks" ></textarea>
                    </td>
                </tr>
                <!-- <label for="vehicle_name">車両名</label>
                    <input type="text" name="vehicle_name" id="vehicle_name" required> -->
                <!-- <label for="buying_price">仕入れ価格</label>
                    <input type="number" name="buying_price" id="buying_price" required> -->
                <!-- <label for="model_year">年式</label>
                    <input type="number" name="model_year" id="model_year" required> -->
                <!-- <label for="mileage">走行距離</label>
                    <input type="number" name="mileage" id="mileage" required> -->
                <!-- <label for="engine_displacement">排気量</label>
                    <input type="number" name="engine_displacement" id="engine_displacement" required> -->
                <!-- <label for="inspection_date">車検日(次回)</label>
                    <input type="date" name="inspection_date" id="inspection_date" required> -->
                <!-- <label for="exterior_color">外装色</label>
                    <input type="text" name="exterior_color" id="exterior_color" required> -->
                <!-- <label for="interior_color">内装色</label>
                    <input type="text" name="interior_color" id="interior_color" required> -->
                <!-- <label for="color_code">カラーNo</label>
                    <input type="text" name="color_code" id="color_code" required> -->
                <!-- <label for="vehicle_identification_number">車体番号</label>
                    <input type="text" name="vehicle_identification_number" id="vehicle_identification_number" required> -->
                <!-- <label for="score">評価点</label>
                    <input type="text" name="score" id="score" required> -->
                <!-- <label for="warranty_document">新車保証書</label>
                    <input type="radio" name="warranty_document" id="warranty_document" value="0" checked>あり
                    <input type="radio" name="warranty_document" id="warranty_document" value="1">なし -->
                <!-- <label for="manual">取扱説明書</label>
                    <input type="radio" name="manual" id="manual" value="0" checked>あり
                    <input type="radio" name="manual" id="manual" value="1">なし -->
                <!-- <label for="fuel">燃料</label>
                    <input type="radio" name="fuel" id="fuel" value="0" checked>ガソリン
                    <input type="radio" name="fuel" id="fuel" value="1">ハイオク
                    <input type="radio" name="fuel" id="fuel" value="2">軽油 -->
                <!-- <label for="car_type_id">車の種類</label>
                    <input type="radio" name="car_type_id" id="car_type_id" value="0" checked>AT
                    <input type="radio" name="car_type_id" id="car_type_id" value="1">MT -->
                <!-- <label for="air_conditioning">エアコン</label>
                    <input type="radio" name="air_conditioning" id="air_conditioning" value="0" checked>AC
                    <input type="radio" name="air_conditioning" id="air_conditioning" value="1">AAC
                    <input type="radio" name="air_conditioning" id="air_conditioning" value="2">WAC
                    <input type="radio" name="air_conditioning" id="air_conditioning" value="3">無 -->
                <!-- <label for="shift_lever">シフトレバー</label>
                    <input type="radio" name="shift_lever" id="shift_lever" value="0" checked>フロア
                    <input type="radio" name="shift_lever" id="shift_lever" value="1">コラム
                    <input type="radio" name="shift_lever" id="shift_lever" value="2">インパネ -->
                <!-- <label for="location">所在地</label>
                    <input type="text" name="location" id="location" required> -->
                <!-- <label for="maker">メーカー</label>
                    <input type="text" name="maker" id="maker" required> -->
                <!-- <label for="car_model">自動車区分</label>
                    <input type="text" name="car_model" id="car_model" required> -->
                <!-- <label for="option">オプション</label>
                    <input type="checkbox" name="option" id="option" value="0">PS
                    <input type="checkbox" name="option" id="option" value="0">PW
                    <input type="checkbox" name="option" id="option" value="0">AW
                    <input type="checkbox" name="option" id="option" value="0">背面タイヤ
                    <input type="checkbox" name="option" id="option" value="0">カワ
                    <input type="checkbox" name="option" id="option" value="0">AB
                    <input type="checkbox" name="option" id="option" value="0">TV
                    <input type="checkbox" name="option" id="option" value="0">ナビ
                    <input type="checkbox" name="option" id="option" value="0">Rスポ -->
                <!-- <label for="auction_join">オークション登録</label>
                    <input type="radio" name="auction_join" id="auction_join" value="0" checked>あり
                    <input type="radio" name="auction_join" id="auction_join" value="1">なし -->
                <!-- <label for="remarks">備考</label>
                    <textarea cols="50" rows="10" name="remarks" id="remarks"></textarea> -->

            </table>
            <input class="contact-submit"type="submit" value="登録する">
        </form>
    </div>
</body>
</html>