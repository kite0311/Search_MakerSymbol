<?php
$dsn = "mysql:dbname=製造所固有記号;host=localhost;charset=utf8mb4";
$username = "root";
$password = "";
try {
    $db = new PDO($dsn, $username, $password);
}catch (PDOException $e) {
    echo "接続エラー  : " .$e->getMessage();
}
?>