<?php

    require("db_connect.php");

    $sql = "SELECT COUNT(*) FROM search";
    $count = new Count();
    $count->sql = $sql;
    $count->DataCount($sql);

?>