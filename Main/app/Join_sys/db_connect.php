<?php
define('DSN',"mysql:dbname=mydb;host=localhost;charset=utf8mb4");
define('DB_USER', "root");
define('DB_PASS', "");
try {
    $dbh = new PDO(DSN, DB_USER, DB_PASS);
}catch (PDOException $e) {
    $msg = $e->getMessage();
}
?>