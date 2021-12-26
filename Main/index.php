<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ja" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>製造所固有記号</title>
<link rel="stylesheet" href="../stylesheet/stylesheet.css">
<link rel="stylesheet" href="../stylesheet/navigation_menu.css">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
<h1 align="center">製造所固有記号検索</h1>
<nav class="menu" id="menu">
<ul style="display: flex;">
<li><a href="Home/What.html" class="What" aligen="center">固有記号とは？</a></li>
<li><a href="contact/contactForm.html" id="contact_form">問い合わせ</a></li>
<li><a href="Join_sys/signup.php">テスト用</a></li>
</ul>
</nav>
<?php require("DataBase/db_count.php") ?></br>
<!--Search_form-->
<form action="home.php" method="get">
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
</body>
</html>