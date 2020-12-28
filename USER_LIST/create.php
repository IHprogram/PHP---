<?php

$name = $_POST["username"];
$mail = $_POST["mail"];

// インクルード処理。commmon.phpに書かれている処理を呼び出す。
require_once("common.php");

try {
  // SQLインジェクションを防ぐためのプリペアドステートメント（という対策）
  $sql = "insert into users(username, mail) values(:name,:mail)";
  // 「引数に入れたSQL文をプリペアードステートメント対策で実行する」という設定
  $stmt = $pdo->prepare($sql);
  // bindValueは、プリペアードステートメント形式で行うSQL文の中にある、
  // この「:id」の部分に、なんの値が入るかを指定する役割を持っている
  //そして、その値をただの文字列として認識させる（SQL文ではなく、ただのテキストにしてくれる）
  $stmt->bindValue(":name", $name, PDO::PARAM_STR);
  $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
  // ↓MySQLへの命令部分
  $stmt->execute();
  header("Location: list.php");
  exit;
} catch (Exception $e) {
  echo $e->getMessage();
}

?>