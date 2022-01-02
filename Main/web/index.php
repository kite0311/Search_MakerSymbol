<?php

//バリデーション処理の呼び出し
require("../app/validate/validate_function.php");
createToken();

//htmlタグの読み込み
include("../app/web_parts/_header.php");

//DB登録件数の表示
require("../app/DataBase/db_count.php");

//DB記号検索エリアの読み込み
include("../app/web_parts/search_area.php");

?>

<?php

//フッターの読み込み
include("../app/web_parts/_footer.php");

?>