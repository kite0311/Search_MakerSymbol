<?php

    require("db_functions.php");

    /* SQL文を定義 */
    $sql = "SELECT COUNT(*) FROM search";

    /*インスタンスの作成 */
    $count = new dbCount();
    /* SQL文を代入 */
    $count->sql = $sql;
    /* 関数の呼び出し */
    $count->DataCount($sql);

?>