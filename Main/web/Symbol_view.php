<?php

//バリデーション処理の呼び出し
require("../app/validate/validate_function.php");
createToken();

//フォームからのデータを処理
require("../app/DataBase/dbsearch_symbol.php");

//htmlタグの読み込み
include("../app/web_parts/_header.php");

//DB記号検索エリアの読み込み
include("../app/web_parts/search_area.php");

//検索結果表示
require("../app/web_parts/search_result.php");

//フッターの読み込み
include("../app/web_parts/_footer.php");

?>