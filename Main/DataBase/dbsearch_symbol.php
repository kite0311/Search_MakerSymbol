<?php

require_once("db_config.php");
$sy_errors = array();
$rows = array();

/* フォームからの値を取得 */
$symbol = filter_input(INPUT_GET,'symbol');
$maker  = filter_input(INPUT_GET,'maker');

/* $symbol,$makerに値が入っていた時 */
if(!empty($symbol && $maker)) {
    $dbh = new Connect();
    $dbh->pdo();
    $stmt = $dbh->pdo()->prepare("SELECT * FROM search WHERE symbol = (:symbol) AND maker_name LIKE (:maker_name)");
    if($stmt) {
        $stmt->bindValue(':symbol', $symbol, PDO::PARAM_STR);
        $stmt->bindValue(':maker_name', "%".$maker ."%", PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll();
    }
/* $symbolのみ値が入力されていた時 */
}else if(!empty($symbol)){
    $dbh = new Connect();
    $dbh->pdo();
    $stmt = $dbh->pdo()->prepare("SELECT * FROM search WHERE symbol = (:symbol) ");
    if($stmt) {
        $stmt->bindValue(':symbol', $symbol, PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll();
    }
}

?>