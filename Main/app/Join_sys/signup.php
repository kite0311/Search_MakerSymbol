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
<h1>新規登録</h1>
<form action="register.php" method="post">
<div>
    <label>ニックネーム:<label>
    <input type="text" name="name" required>
</div>
<div>
    <label>メールアドレス:<label>
    <input type="text" name="mail" required>
</div>
<div>
    <label>パスワード:<label>
    <input type="password" name="pass" required>
</div>
<input type="submit" value="新規登録">
</form>
<p>すでにアカウントをお持ちの方は<a href="login_form.php">コチラ！</a></p>
</body>
</html>