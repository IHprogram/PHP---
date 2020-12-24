<?php
// common.phpの処理を呼び出すインクルード処理
require_once("common.php");

// intval関数により、指定した値のデータ型を整数型に変更することができる。
$id = intval($_GET["id"]);

try {
  $sql = "delete from users WHERE id ='$id'";
  $stmt = $pdo->query($sql);
  var_dump($id);

  header("Location: list.php");
  exit;
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
