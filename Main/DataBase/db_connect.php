<?php

class Connect
{
    /*Property */
    const DB_NAME ='製造所固有記号';
    const HOST    ='localhost';
    const UTF     ='utf8mb4';
    const USER    ='root';
    const PASS    ='';

    public function pdo() {
        $dsn = "mysql:dbname=" .self::DB_NAME. "; host=" .self::HOST. "; charset=" .self::UTF;
        $user = self::USER;
        $pass = self::PASS;
        try {
            $pdo = new PDO ($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.self::UTF )); 
        }catch(PDOException $e) {
            echo 'DB接続エラー :' . $e->getMessage();
            die();
        }
        return $pdo;
    }
}

class Count extends Connect
{
    public $sql;

    public function DataCount($sql){
        $stmt = $this->pdo()->query($sql);
        foreach ($stmt as $row) {
            echo "現在" .$row[0] ."件のデータが登録されています";
        }
    }
}
?>