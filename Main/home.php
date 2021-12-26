<?php require("DataBase\dbsearch_symbol.php"); ?>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ja" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>製造所固有記号</title>
<link rel="stylesheet" href="../stylesheet/stylesheet.css">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
<form action="home.php" method="get">
<!--Main Title-->
<a href="index.php"><h1 align="center">製造所固有記号検索</h1></a>
</nav>
<!--Sub Title-->
<div id="form">
<h2>検索フォーム</h2>
</div>
<!--Searh Contents Area-->
<div class="search_contents">
<table style="border-color: #b4d46e;">
<td class="label">記号:<span style="color: #FF0000">必須<span></td>
<td class="search_symbol"><input type="text" name="symbol" size="5" max_length="10" placeholder="例: A" required>
</tr>
<tr>
<td class="label">製造者:</td>
<td class="search_maker"><input type="text" name="maker_name" size="30" maxlength="50" class="maker" placeholder="例: ○○株式会社"></td>
</tr>
<tr>
<td class="search_button"><input type="submit" value="検索" name="search" id="search">
</tr>
</table>
</div>
<div class="result_symbol">
<h3><b>検索結果</b></h3>
<!--Result-->
<table border="2">
<tr><td>所在地</td><td>記号</td><td>法人番号</td><td>製造者名</td><td>製造者所在地</td></tr>
<?php  ?>
<?php
    if($rows){
        echo count($rows)."件ヒットしました";
    }else{
        echo "該当データは存在しません";
    }
    foreach($rows as $row){
?>
<tr>
<td><?=htmlspecialchars($row['prefecture'],ENT_QUOTES,'UTF-8')?></td>
<td><?=htmlspecialchars($row['symbol'],ENT_QUOTES,'UTF-8')?></td>
<td><?=htmlspecialchars($row['number'],ENT_QUOTES,'UTF-8')?></td>
<td><a href="detail_transmission.php<?php $maker_name = $row['maker_name'];?>"><?=htmlspecialchars($row['maker_name'],ENT_QUOTES,'UTF-8')?></a></td>
<td><a href="https://www.google.com/maps/place/<?php echo $row['maker_address']?>"><?=htmlspecialchars($row['maker_address'],ENT_QUOTES,'UTF-8')?></a></td>
</tr>
<?php
    }
?>
<!--Error_Count-->
<?php if(count($sy_errors) > 0): ?>
<?php
    foreach($sy_errors as $sy_value){
        if(isset($sy_value)){
            echo "<p>".$sy_value."</p>";
        }
    }
?>
<?php endif ?>
</div>
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