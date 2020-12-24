<?php

// インクルード処理。commmon.phpに書かれている処理を呼び出す。
require_once("common.php");

try {
  $sql = "insert into users(usesrname, mail) values('".$name."','".$mail."')";
  $stmt = $pdo->query($sql);

  header("Location: list.php");
  exit;
} catch (Exception $e) {
  echo $e->getMessage();
}

?>