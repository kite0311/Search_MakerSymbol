<h2>検索フォーム</h2>
    <form action="Symbol_view.php" method="get">
    <!--Searh Contents Area-->
        <div class="search_contents">
            <table style="border-color: #b4d46e;">
                <tr>
                    <td class="label">記号:<span style="color: #FF0000">必須<span></td>
                    <td class="search_symbol"><input type="text" name="symbol" size="5" max_length="10" placeholder="例: A" required></td>
                </tr>
                <tr>
                    <td class="label">製造者:</td>
                    <td class="search_maker"><input type="text" name="maker_name" size="30" maxlength="50" class="maker" placeholder="例: ○○株式会社"></td>
                </tr>
                <tr>
                    <td class="search_button"><input type="submit" value="検索" name="search" id="search"></td>
                </tr>
                    <input type="hidden" name="token" value="<?= Token($_SESSION['token']); ?>">
            </table>
        </div>