<?php
// common.phpの処理を呼び出すインクルード処理
require_once("common.php");

// intval関数により、指定した値のデータ型を整数型に変更することができる。
$id = intval($_GET["id"]);

try {
  // SQLインジェクションを防ぐためのプリペアドステートメント（という対策）
  $sql = "DELETE FROM users WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":id", $id, PDO::PARAM_INT);
  // ↓MySQLへの命令部分
  $stmt->execute();

  header("Location: list.php");
  exit;
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
