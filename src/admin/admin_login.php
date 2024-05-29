<<<<<<< Updated upstream
//管理者ログイン画面
=======
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css"href="css/login.css">
    <title>ログイン画面</title>
</head>
<body>
    <!-- <div class="header"> -->
        
        <p id="centerikon">AGB</p>
        <img id="teamrogo" src="img/teamrogo.jpg">
        <form action="login-output.php"method="post">
        <div class="form">
            <!-- <p id="mal">メールアドレス</p> -->
    <label class="mail">
        <input type="text" name="mail" placeholder="例）asoshose@aso.shose"><br>
        <a id="mailikon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg></a>
    </label>
    <label class="password">
        <!-- <p id="pas">パスワード</p> -->
        <input type="password" name="password"placeholder="PassWord">
       
       <a id="key"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></a>
</label>
<!-- </div> -->

<input type="submit" name="regist" value="Login">
</form>
</body>
</html>
>>>>>>> Stashed changes
