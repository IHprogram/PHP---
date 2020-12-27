<?php

// インクルード処理。commmon.phpに書かれている処理を呼び出す。
require_once("common.php");

try {
  $sql = "insert into users(usesrname, mail) values(:name,:mail)";

  // SQLインジェクションを防ぐためのプリペアドステートメント（という対策）
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":name", $name, PDO::PARAM_STR);
  $stmt->bindValue(";mail", $mail, PDO::PARAM_STR);

  $stmt->execute();
  header("Location: list.php");
  exit;
} catch (Exception $e) {
  echo $e->getMessage();
}

?>