<?php
require_once("db_connect.php");
try {
    $dbh = new PDO($dsn,$username,$password,);
    $sql = "SELECT COUNT(*) FROM search";
    $stmt = $dbh->query($sql);

    foreach ($stmt as $row) {
        echo "現在" .$row[0] ."件のデータが登録されています。";
    }
    $dbh = null;
    //DB接続エラー
}catch(PDOException $e) {
    echo 'DB接続エラー :' . $e->getMessage();
}
?>