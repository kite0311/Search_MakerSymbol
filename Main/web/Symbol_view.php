<?php

//フォームからのデータを処理
require("../DataBase/dbsearch_symbol.php");

?>

<?php

//htmlタグの読み込み
include("../app/web_parts/_header.php");
//DB記号検索エリアの読み込み
include("../app/web_parts/search_area.php");

?>

<?php

//検索結果表示
require("../app/web_parts/search_result.php");
//フッターの読み込み
include("../app/web_parts/_footer.php");

?>