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
        <a href="/" class="brand"><img src="{{ asset('images/logo.png')}}" class="logo"></a>
        </div>
        <div class="site-header__middle">
        <nav class="nav">
            <button class="nav__toggle" aria-expanded="false" type="button">
            menu
            </button>
            <ul class="nav__wrapper">
            <li class="nav__item"><a href="/">ホーム</a></li>
            @if($session == 1)
                <li class="nav__item"><a href="/auction">オークション</a></li>
            @endif
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

  <div class="pageTitleArea">
    <h1 class="pageTitle">登録完了</h1>
    <p class="pageAbout">以下の内容で新規会員登録を行いました。</p>
  </div>


  <table class="contact-table">
    <tr>
      <th class="contact-item">アカウント名</th>
      <td class="contact-body">
        {{$user_id}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">ニックネーム</th>
      <td class="contact-body">
        {{$screen_name}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">名前</th>
      <td class="contact-body">
        {{$first_name}}
        {{$last_name}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">名前（フリガナ）</th>
      <td class="contact-body">
        {{$first_name_kana}}
        {{$last_name_kana}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">性別</th>
      <td class="contact-body">
        {{$gender}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">メール</th>
      <td class="contact-body">
        {{$email}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">電話</th>
      <td class="contact-body">
        {{$phone_number}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">職業</th>
      <td class="contact-body">
        {{$job}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">住所</th>
      <td class="contact-body">
        {{$prefectures}}
        {{$city}}
        {{$block}}
        {{$building}}
      </td>
    </tr>
    <tr>
      <th class="contact-item">企業名（法人の方のみ）</th>
      <td class="contact-body">
        {{$company_name}}
      </td>
    </tr>

    <tr>
      <th class="contact-item">パスワード</th>
      <td class="contact-body">
        {{$password}}
      </td>
    </tr>
  </table>
  <input class="contact-submit" type="submit" value="ログイン画面へ戻る" />

  <footer id="footer01" class="footer outer-block">
      <div class="logo">
        <a href="">
          <img src="img/logo" alt="">
        </a>
      </div>
      <ul class="nav">
        <li><a href="/">ホーム</a></li>
        @if($session == 1)
            <li><a href="/auction">オークション</a></li>
            <li><a href="/vehicle_register">車両新規登録</a></li>
        @else
            <li><a href="/user_register">新規会員登録</a></li>
            <li><a href="/login">ログイン</a></li>
        @endif
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