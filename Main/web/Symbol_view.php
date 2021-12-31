<?php

//フォームからのデータを処理
require("../DataBase/dbsearch_symbol.php");

?>

<?php

//htmlタグの読み込み
include("../app/web_parts/_header.php");
//ナビゲーションメニューの読み込み
include("../app/web_parts/nav_menu.php");
//DB記号検索エリアの読み込み
include("../app/web_parts/search_area.php");

?>

<?php

require("../app/web_parts/search_result.php");

include("../app/web_parts/_footer.php");
?>