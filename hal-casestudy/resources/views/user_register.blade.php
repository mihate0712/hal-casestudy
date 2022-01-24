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
  <link rel="stylesheet" href="{{ asset('css/styles/reset.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}">
</head>

<body>
  <header class="site-header">
    <div class="wrapper site-header__wrapper">
        <div class="site-header__start">
        <a href="#" class="brand">Brand</a>
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
        <div class="site-header__end">
        <a class="button" href="/login">ログイン</a>
        <a class="button" href="/user_register">新規登録</a>
        </div>
    </div>
  </header>

  <form action="/user_register" method="post">
  @csrf
    <table class="contact-table">
      <tr>
        <th class="contact-item">アカウント名</th>
        <td class="contact-body">
          <input type="text" name="user_id" class="form-text" placeholder="例）ohs@90384" value="" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">ニックネーム</th>
        <td class="contact-body">
          <input type="text" name="screen_name" class="form-text" placeholder="例）テカる" value="" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">名前</th>
        <td class="contact-body">
          <input type="text" name="first_name" class="form-text" placeholder="例）中野" value="" required>
          <input type="text" name="last_name" class="form-text" placeholder="例）輝" value="" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">名前（フリガナ）</th>
        <td class="contact-body">
          <input type="text" name="first_name_kana" class="form-text" placeholder="例）ナカノ" value="" required>
          <input type="text" name="last_name_kana" class="form-text" placeholder="例）ヒカル" value="" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">性別</th>
        <td class="contact-body">
          <label class="contact-sex">
            <input type="radio" name="gender" value="男性" required>
            <span class="contact-sex-txt">男性</span>
          </label>
          <label class="contact-sex">
            <input type="radio" name="gender" value="女性" required>
            <span class="contact-sex-txt">女性</span>
          </label>
        </td>
      </tr>
      <tr>
        <th class="contact-item">メール</th>
        <td class="contact-body">
          <input type="email" name="email" class="form-text" placeholder="例）abc.defg@gmail.com" value="" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">電話</th>
        <td class="contact-body">
          <input type="tel" name="phone_number" class="form-text" placeholder="09012213443" value="" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">職業</th>
        <td class="contact-body">
          <select name="job" class="form-select" required>
            <option value="" selected>選択してください</option>
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
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="山梨県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select>
          <input type="text" name="city" class="form-text" placeholder="市区町村" value="" required>
          <input type="text" name="block" class="form-text" placeholder="番地" value="" required>
          <input type="text" name="building" class="form-text" placeholder="建物名・部屋番号" value="" required>
        </td>
      </tr>
      <tr>
        <th class="contact-item">企業名（法人の方のみ）</th>
        <td class="contact-body">
          <input type="text" name="company_name" class="form-text" value="" placeholder="">
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