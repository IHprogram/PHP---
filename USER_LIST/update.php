<?php

// インクルード処理。commmon.phpに書かれている処理を呼び出す。
require_once("common.php");
try {
  $sql = "update users set username = :name, mail = :mail where id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":id", $id, PDO::PARAM_INT);
  $stmt->bindValue(":name", $name, PDO::PARAM_STR);
  $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
  $stmt->execute();
  header("Location: list.php");
  exit;
} catch (Exception $e) {
  echo $e->getMessage();
}
?>