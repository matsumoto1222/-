<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "メールアドレスとパスワードを入力してください。";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // ログイン成功
            $_SESSION['user_id'] = $user['id'];
            echo "ログイン成功";
            // リダイレクトまたは他のアクション
        } else {
            echo "メールアドレスまたはパスワードが間違っています。";
        }
    }
} else {
    echo "無効なリクエストです。";
}
?>
