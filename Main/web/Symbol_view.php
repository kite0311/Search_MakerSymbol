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

?>


<!--close Window-->
                <div class="close_button">
                    <hr width="98%">
                    <table width="100%">
                        <tr align="center">
                            <td class="item_button"><input class="button" name="back" type="button" value="閉じる" /></td>
                        </tr>
                    </table>
                </div>
            <footer>フッター</footer>
    </body>
</html>