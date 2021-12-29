<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>車両登録</title>
</head>
<body>
    <h1>新規車両登録</h1>
    <form action="" method="post">
        車両番号 001
        <label for="vehicle_name">車両名</label>
            <input type="text" name="vehicle_name" id="vehicle_name" required>
        <label for="buying_price">仕入れ価格</label>
            <input type="number" name="buying_price" id="buying_price" required>
        <label for="model_year">年式</label>
            <input type="number" name="model_year" id="model_year" required>
        <label for="mileage">走行距離</label>
            <input type="number" name="mileage" id="mileage" required>
        <label for="engine_displacement">排気量</label>
            <input type="number" name="engine_displacement" id="engine_displacement" required>
        <label for="inspection_date">車検日(次回)</label>
            <input type="date" name="inspection_date" id="inspection_date" required>
        <label for="exterior_color">外装色</label>
            <input type="text" name="exterior_color" id="exterior_color" required>
        <label for="interior_color">内装色</label>
            <input type="text" name="interior_color" id="interior_color" required>
        <label for="color_code">カラーNo</label>
            <input type="text" name="color_code" id="color_code" required>
        <label for="vehicle_identification_number">車体番号</label>
            <input type="text" name="vehicle_identification_number" id="vehicle_identification_number" required>
        <label for="score">評価点</label>
            <input type="text" name="score" id="score" required>
        <label for="warranty_document">新車保証書</label>
            <input type="radio" name="warranty_document" id="warranty_document" value="0" checked>あり
            <input type="radio" name="warranty_document" id="warranty_document" value="1">なし
        <label for="manual">取扱説明書</label>
            <input type="radio" name="manual" id="manual" value="0" checked>あり
            <input type="radio" name="manual" id="manual" value="1">なし
        <label for="fuel">燃料</label>
            <input type="radio" name="fuel" id="fuel" value="0" checked>ガソリン
            <input type="radio" name="fuel" id="fuel" value="1">ハイオク
            <input type="radio" name="fuel" id="fuel" value="2">軽油
        <label for="car_type_id">車の種類</label>
            <input type="radio" name="car_type_id" id="car_type_id" value="0" checked>AT
            <input type="radio" name="car_type_id" id="car_type_id" value="1">MT
        <label for="air_conditioning">エアコン</label>
            <input type="radio" name="air_conditioning" id="air_conditioning" value="0" checked>AC
            <input type="radio" name="air_conditioning" id="air_conditioning" value="1">AAC
            <input type="radio" name="air_conditioning" id="air_conditioning" value="2">WAC
            <input type="radio" name="air_conditioning" id="air_conditioning" value="3">無
        <label for="shift_lever">シフトレバー</label>
            <input type="radio" name="shift_lever" id="shift_lever" value="0" checked>フロア
            <input type="radio" name="shift_lever" id="shift_lever" value="1">コラム
            <input type="radio" name="shift_lever" id="shift_lever" value="2">インパネ
        <label for="location">所在地</label>
            <input type="text" name="location" id="location" required>
        <label for="maker">メーカー</label>
            <input type="text" name="maker" id="maker" required>
        <label for="car_model">自動車区分</label>
            <input type="text" name="car_model" id="car_model" required>
        <label for="option">オプション</label>
            <input type="checkbox" name="option" id="option" value="0">PS
            <input type="checkbox" name="option" id="option" value="0">PW
            <input type="checkbox" name="option" id="option" value="0">AW
            <input type="checkbox" name="option" id="option" value="0">背面タイヤ
            <input type="checkbox" name="option" id="option" value="0">カワ
            <input type="checkbox" name="option" id="option" value="0">AB
            <input type="checkbox" name="option" id="option" value="0">TV
            <input type="checkbox" name="option" id="option" value="0">ナビ
            <input type="checkbox" name="option" id="option" value="0">Rスポ
        <label for="remarks">備考</label>
            <textarea cols="50" rows="10" name="remarks" id="remarks"></textarea>
        <label for="auction_join">オークション登録</label>
            <input type="radio" name="auction_join" id="auction_join" value="0" checked>あり
            <input type="radio" name="auction_join" id="auction_join" value="1">なし
        
        <input type="submit" value="登録する">
    </form>
</body>
</html>