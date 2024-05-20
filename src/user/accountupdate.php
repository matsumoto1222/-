<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>アカウント更新画面</title>
    <style>
        body {
            background-image: url('img/bg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <p id="centerikon">Aso Shose</p>
    <img id="teamrogo" src="img/teamrogo.jpg">
    <form action="account-update-process.php" method="post">
        <div class="form">
            <label class="mail">
                <input type="text" name="mail" placeholder="新しいメールアドレスを入力">
                <a id="mailikon">
                    <!-- メールアイコンのSVG -->
                </a>
            </label>
            <label class="password">
                <input type="password" name="new_password" placeholder="新しいパスワード">
                <a id="key">
                    <!-- キーのSVG -->
                </a>
            </label>
            <input type="submit" name="update" value="更新">
        </div>
    </form>
</body>
</html>
