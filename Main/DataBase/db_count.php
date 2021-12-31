<?php

    require("db_connect.php");

    $sql = "SELECT COUNT(*) FROM search";
    $count = new DBCount();
    $count->sql = $sql;
    $count->DataCount($sql);

?>