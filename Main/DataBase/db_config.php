<?php

/* SQLの接続処理 */
class Connect
{
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

/*データベース件数取得関数 */
class dbCount extends Connect
{
    public $sql;

    public function DataCount($sql){
        $stmt = $this->pdo()->query($sql);
        foreach ($stmt as $row) {
            echo "現在" .$row[0] ."件のデータが登録されています";
        }
    }
}

/*データベース検索処理関数 */
class dbSearch extends Connect
{
    public $sql;
    protected $symbol;
    protected $maker;

    function __construct($symbol,$maker) {
        $this->symbol = $symbol;
        $this->maker = $maker;
    }

    function DataSearch($symbol,$maker) {
        $stmt = $this->pdo()->prepare("SELECT * FROM search WHERE symbol = (:symbol) AND maker_name LIKE (:maker_name)");
        if($stmt) {
            $stmt->bindValue(':symbol', $symbol, PDO::PARAM_STR);
            $stmt->bindValue(':maker_name', "%".$maker ."%", PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchAll();
        }
    }

}

?>