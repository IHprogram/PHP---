<?php
// common.phpの処理を呼び出すインクルード処理
require_once("common.php");

// intval関数により、指定した値のデータ型を整数型に変更することができる。
$id = intval($_GET["id"]);

try {
  // SQLインジェクションを防ぐためのプリペアドステートメント（という対策）
  $sql = "DELETE FROM users WHERE id = :id";
  // 「引数に入れたSQL文をプリペアードステートメント対策で実行する」という設定
  $stmt = $pdo->prepare($sql);
  // bindValueは、プリペアードステートメント形式で行うSQL文の中にある、
  // この「:id」の部分に、なんの値が入るかを指定する役割を持っている
  //そして、その値をただの文字列として認識させる（SQL文ではなく、ただのテキストにしてくれる）
  $stmt->bindValue(":id", $id, PDO::PARAM_INT);
  // ↓MySQLへの命令部分
  $stmt->execute();

  header("Location: list.php");
  exit;
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
