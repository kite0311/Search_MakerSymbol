<?php
$sy_errors = array();
$rows = array();
if(isset($_GET["symbol"]) && isset($_GET["maker_name"])) { //DataCheck
    $symbol = $_GET["symbol"];
    $maker = $_GET["maker_name"];
    if(!empty($symbol && $maker)) {
        require_once("db_connect.php");
                try {
                    $dbh = new PDO($dsn,$username,$password,);
                    $stmt = $dbh->prepare("SELECT * FROM search WHERE symbol = (:symbol) AND maker_name LIKE (:maker_name)");
                        if($stmt) {
                            $stmt->bindValue(':symbol', $symbol, PDO::PARAM_STR);
                            $stmt->bindValue(':maker_name', "%".$maker ."%", PDO::PARAM_STR);
                            $stmt->execute();
                            $rows = $stmt->fetchAll();
                            $dbh = null;
                        }
                    } catch(PDOException $e) {
                        echo 'DB接続エラー :' . $e->getMessage();
                    }
        }else if(!empty($symbol)){
            require_once("db_connect.php");
                try {
                    $dbh = new PDO($dsn,$username,$password,);
                    $stmt = $dbh->prepare("SELECT * FROM search WHERE symbol = (:symbol) ");  
                        if($stmt) {
                            $stmt->bindValue(':symbol', $symbol, PDO::PARAM_STR);
                            $stmt->execute();

                            $rows = $stmt->fetchAll();
                            $dbh = null;
                        }
                    } catch(PDOException $e) {
                        echo 'DB接続エラー :' . $e->getMessage();
                    }
        }else{
            $sy_errors['error'] = "<p>"."※記号入力は必須です"."</p>";
        }
    }
?>