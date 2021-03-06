<!-- このsession.phpは、セッションを使ってサーバー自体にデータを記録させるファイル -->

<?php
// session_start関数を使うことで、
// 「セッションで記録させる」「セッションから引き出す」「セッションで記録を削除する」
// などの色々な機能が利用できるようになる
session_start();
// セッション情報は「$_SESSION」に連想配列として保存される
// 保存の仕方は「$_SESSION['キー'] = 値」
$_SESSION["text"] = "セッションのテストです。";

echo $_SESSION["text"];// → ブラウザには「セッションのテストです。」と表示される