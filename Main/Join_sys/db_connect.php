<?php
define('DSN',"mysql:dbname=製造所固有記号;host=localhost;charset=utf8mb4");
define('DB_USER', "root");
define('DB_PASS', "");
try {
    $db = new PDO($dsn, $username, $password);
}catch (PDOException $e) {
    echo "接続エラー  : " .$e->getMessage();
}
?>