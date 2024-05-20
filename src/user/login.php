<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="user/css/login.css">
    <title>ログイン画面</title>
    <style>
        /* CSSで背景画像を設定 */
        body {
            background-image: url('user/img/bg.png'); /* 画像のパスを正確に指定してください */
            background-size: cover; /* 背景画像を画面にフィットさせる */
            background-position: center; /* 画像を中央に配置 */
            background-repeat: no-repeat; /* 画像の繰り返しを無しに設定 */
        }
    </style>
</head>
<body>
    <p id="centerikon">Aso Shose</p>
    <img id="teamrogo" src="img/teamrogo.jpg">
    <form action="login-output.php" method="post">
        <div class="form">
            <label class="mail">
                <input type="text" name="mail" placeholder="例）asoshose@aso.shose"><br>
                <a id="mailikon">
                    <!-- メールアイコンのSVG -->
                </a>
            </label>
            <label class="password">
                <input type="password" name="password" placeholder="PassWord">
                <a id="key">
                    <!-- キーのSVG -->
                </a>
            </label>
            <input type="submit" name="regist" value="Login">
        </div>
    </form>
</body>
</html>
