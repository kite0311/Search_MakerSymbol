<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //フォームから送信されたデータの格納
      $name = $_POST["name"];
      $mail = $_POST["email"];
      $category = $_POST["category"];
      $content = $_POST["content"];
      $email = "19970311kk@gmail.com";
   }
   if (isset($_POST["submit"])) {
      mb_language('ja'); //日本語をメールで送る
      mb_internal_encoding("UTF-8");
      $subject = "[自動送信] お問い合わせ内容の確認";
$body =<<<EOM
{$name} 様
お問い合わせありがとうございます。
下記の内容を、メールに確認させて頂きました。

==================================================
【お名前】
{$name}
【メール】
{$mail}
【カテゴリ】
{$category}
【内容】
{$content}
==================================================
内容を確認のうえ、今後のサイト運営に活用させていただきます。
EOM;
    $fromEmail = "19970311kk@gmail.com"; //送信元のメールアドレスを変数fromEmailに格納
    $fromName = "お問い合わせ"; //お問い合わせ元の名前
    $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";//ヘッダー情報をheaderに格納
    mb_send_mail($email, $subject, $body, $header);
    header("Location:http://localhost:8888/%E8%A3%BD%E9%80%A0%E6%89%80%E5%9B%BA%E6%9C%89%E8%A8%98%E5%8F%B7/Main/contact/complete.php");//送信完了画面
   exit;
   }
?>
<!DOCTYPE html>
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
<h1 align="center">製造所固有記号検索</h1>
<form action="confirm.php" method="post">
<input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="category" value="<?php echo htmlspecialchars($category,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="content" value="<?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?>">
<p>お問い合わせ内容は下記の通りでよろしいでしょうか？<br>よろしければ「送信する」ボタンをクリックして下さい</p>
<dl>
   <dt>お名前</dt>
   <dd><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8");?></dd>
   <dt>メールアドレス</dt>
   <dd><?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8");?></dd>
   <dt><?php echo htmlspecialchars($category,ENT_QUOTES,"UTF-8");?></dt>
   <dt>お問い合わせ内容</dt>
   <dd><?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8");?></dd>
</dl>
<input type="button" value="戻る" onClick="history.back()">
<button type="submit" name="submit">送信</button>
</form>
</body>
</html>