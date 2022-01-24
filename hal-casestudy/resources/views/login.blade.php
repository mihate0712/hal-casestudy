<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>ログイン</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="css/destyle.css">
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div id="loginForm">
      <div id="logo">
        <img src="{{ asset('images/logo.png')}}" class="logo">
      </div>
      @isset($validationMsgs)
        <section id="errorMsg">
          <p class="error">以下のメッセージをご確認ください。</p>
          <ul>
            @foreach($validationMsgs as $msg)
            <li class="err">{{$msg}}</li>
            @endforeach
          </ul>
        </section>
      @endisset
      <fieldset>
        <h1>ログイン</h1>
        <form action="/login" method="post">
          @csrf
          <div class="iconUser"></div>
          <input type="text" placeholder="メールアドレス" value="{{$loginId ?? ""}}" name="loginId" required>
          <div class="iconPassword"></div>
          <input type="password" placeholder="パスワード" name="loginPw" required>
          <input type="submit" value="ログイン">
        </form>
      </fieldset>
      <div class="newLink">
        <a href="/user_register" class="new">新規登録はこちら</a>
        <a href="/" class="back">TOPページに戻る</a>
      </div>
    </div>
  </body>

</html>