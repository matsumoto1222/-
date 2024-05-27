<?php
$servername = "mysql304.phy.lolipop.lan";
$username = "LAA1516804";
$password = "pass1109";
$dbname = "LAA1516809-budou";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // PDOエラー例外を設定
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>