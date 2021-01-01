<!-- ログイン後のページ -->
<?php
  session_start();
  echo "このユーザー名をセッションで記録しています。：" . $_SESSION["username"] . "<br>";
  echo  "このパスワードをセッションで記録しています。：" . $_SESSION["pass"] . "<br>";
?>
