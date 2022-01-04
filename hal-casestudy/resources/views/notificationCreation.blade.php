<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="author">
        <title>通知作成</title>
        <link rel="stylesheet" href="./css/notificationCreation.css" type="text/css">
    </head>
    <body>
        <header>
            ヘッダーです。
        </header>
        <div class="displayArea">
            <h1 class="pageTitle">通知作成</h1>
            <div class="form">
                <form>
                    <div class="notificationTitle">
                        <h2 class="title">通知タイトル</h2>
                        <input type="text" name="notificationTitle" value="">
                    </div>
                    <div class="notificationChoose">
                        <h2 class="title">通知相手選択(複数選択可)</h2>
                        <div class="chooseRadio">
                            <input type="radio" id="kojin" name="notificationPartner" value="個人ユーザ" class="radiobutton">
                            <label for="kojin">個人ユーザ</label>
                            <input type="radio" id="hojin" name="notificationPartner" value="法人ユーザ" class="radiobutton">
                            <label for="hojin">法人ユーザ</label>
                            <input type="radio" id="kanri" name="notificationPartner" value="管理者" class="radiobutton">
                            <label for="kanri">管理者</label>
                            <input type="radio" id="all" name="notificationPartner" value="全員" class="radiobutton">
                            <label for="all">全員</label>
                        </div>
                    </div>
                    <div class="notificationCategory">
                        <h2 class="title">通知カテゴリ</h2>
                        <select name="カテゴリ" class="category selectCategory">
                            <option value="" hidden>▼選択してください</option>
                            <option value="news">お知らせ</option>
                            <option value="oction">オークション関係</option>
                            <option value="emergency">緊急連絡</option>
                            <option value="other">その他</option>
                        </select>
                    </div>
                    <div class="notificationAbout">
                        <h2 class="title">通知内容</h2>
                        <textarea class="notificationAboutTextarea"></textarea>
                    </div>
                    <div class="button">
                        <a href="#" class="back">内容を取り消して戻る</a>
                        <input type="button" class="searchMore" name="send" value="この内容で通知を送信">
                    </div>
                </form>
            </div>
        </div>
        <footer>
            ふったーだよ
        </footer>
    </body>
</html>