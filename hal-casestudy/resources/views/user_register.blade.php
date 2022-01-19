<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"> -->
  <title>ユーザー登録</title>
  <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400"> -->
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <!-- <link rel="stylesheet" href="css/destyle.css"> -->
  <link rel="stylesheet" href="css/user.css">
</head>

<body>
  <header class="header-1">
    <div class="header-inner">
      <h1>ロゴ</h1>
    </div>
  </header>

  <form action="">
    <table class="contact-table">
      <tr>
        <th class="contact-item">アカウント名</th>
        <td class="contact-body">
          <input type="text" name="user_id" class="form-text" placeholder="例）ohs@90384" value="{{ohs@12345}}" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">ニックネーム</th>
        <td class="contact-body">
          <input type="text" name="screen_name" class="form-text" placeholder="例）テカる" value="中野" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">名前</th>
        <td class="contact-body">
          <input type="text" name="first_name" class="form-text" placeholder="例）中野" value="中野" required>
          <input type="text" name="last_name" class="form-text" placeholder="例）輝" value="輝" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">名前（フリガナ）</th>
        <td class="contact-body">
          <input type="text" name="first_name_kana" class="form-text" placeholder="例）ナカノ" value="ナカノ" required>
          <input type="text" name="last_name_kana" class="form-text" placeholder="例）ヒカル" value="ヒカル" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">性別</th>
        <td class="contact-body">
          <label class="contact-sex">
            <input type="radio" name="gender" value="male" required>
            <span class="contact-sex-txt">男</span>
          </label>
          <label class="contact-sex">
            <input type="radio" name="gender" value="female" required>
            <span class="contact-sex-txt">女</span>
          </label>
        </td>
      </tr>
      <tr>
        <th class="contact-item">メール</th>
        <td class="contact-body">
          <input type="email" name="email" class="form-text" placeholder="例）abc.defg@gmail.com" value="hal.osaka@gmail.com" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">電話</th>
        <td class="contact-body">
          <input type="tel" name="phone_number" class="form-text" placeholder="09012213443" value="09012346789" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">職業</th>
        <td class="contact-body">
          <select name="job" class="form-select" required>
            <option value="">選択してください</option>
            <option value="公務員">公務員</option>
            <option value="経営者・役員">経営者・役員</option>
            <option value="会社員" selected>会社員</option>
            <option value="自営業">自営業</option>
            <option value="自由業">自由業</option>
            <option value="専業主婦">専業主婦</option>
            <option value="パート・アルバイト">パート・アルバイト</option>
            <option value="学生">学生</option>
            <option value="その他">その他</option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="contact-item">住所</th>
        <td class="contact-body">
          <select name="prefectures" class="form-select" required>
            <option value="" selected>選択してください</option>
            <option value="1">北海道</option>
            <option value="2">青森県</option>
            <option value="3">岩手県</option>
            <option value="4">宮城県</option>
            <option value="5">秋田県</option>
            <option value="6">山形県</option>
            <option value="7">福島県</option>
            <option value="8">茨城県</option>
            <option value="9">栃木県</option>
            <option value="10">群馬県</option>
            <option value="11">埼玉県</option>
            <option value="12">千葉県</option>
            <option value="13">東京都</option>
            <option value="14">神奈川県</option>
            <option value="15">新潟県</option>
            <option value="16">富山県</option>
            <option value="17">石川県</option>
            <option value="18">福井県</option>
            <option value="19">山梨県</option>
            <option value="20">長野県</option>
            <option value="21">岐阜県</option>
            <option value="22">静岡県</option>
            <option value="23">愛知県</option>
            <option value="24">三重県</option>
            <option value="25">滋賀県</option>
            <option value="26">京都府</option>
            <option value="27">大阪府</option>
            <option value="28" selected>兵庫県</option>
            <option value="29">奈良県</option>
            <option value="30">和歌山県</option>
            <option value="31">鳥取県</option>
            <option value="32">島根県</option>
            <option value="33">岡山県</option>
            <option value="34">広島県</option>
            <option value="35">山口県</option>
            <option value="36">徳島県</option>
            <option value="37">香川県</option>
            <option value="38">愛媛県</option>
            <option value="39">高知県</option>
            <option value="40">福岡県</option>
            <option value="41">佐賀県</option>
            <option value="42">長崎県</option>
            <option value="43">熊本県</option>
            <option value="44">大分県</option>
            <option value="45">宮崎県</option>
            <option value="46">鹿児島県</option>
            <option value="47">沖縄県</option>
          </select>
          <input type="text" name="city" class="form-text" placeholder="市区町村" value="尼崎市東難波町" required>
          <input type="text" name="block" class="form-text" placeholder="番地" value="1-1-1" required>
          <input type="text" name="building" class="form-text" placeholder="建物名・部屋番号" value="abcマンション-101" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">企業名（法人の方のみ）</th>
        <td class="contact-body">
          <input type="text" name="company_name" class="form-text" value="hal商事" placeholder="">
        </td>
      </tr>

      <tr>
        <th class="contact-item">パスワード</th>
        <td class="contact-body">
          <input type="password" name="password" class="form-text" required>
        </td>
      </tr>
    </table>

    <input class="contact-submit" type="submit" value="登録" />
  </form>

</body>

</html>