<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ja" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>製造所固有記号</title>
<link rel="stylesheet" href="../../stylesheet/">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
<h1>新規会員登録</h1>
<form action="register.php" method="post">
//処理を行う宛先を指定
<div>
    <label>名前：<label>
    <input type="text" name="name" required>
</div>
<div>
    <label>メールアドレス：<label>
    <input type="text" name="mail" required>
</div>
<div>
    <label>パスワード：<label>
    <input type="password" name="pass" required>
</div>
<input type="submit" value="新規登録">
</form>
<p>すでに登録済みの方は<a href="login.php">こちら</a></p>
</body>
</html>
