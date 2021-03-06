<!-- URL: http://localhost:8888/ServerSideCurriculum/TASK02_on_chapter3/list.php -->


<?php

$id = intval($_GET["id"]);
$name = $_POST["username"];
$mail = $_POST["mail"];

// PDO接続先の設定（後から変更できないように「定数」で定義）
define("HOST", "localhost");
define("DB_NAME", "task02");
define("USER", "root"); // MAMPのユーザー名
define("PASS", "root"); // MAMPのパスワード

// 文字化けを防ぐ（「文字コードはutf8で対応する」という設定）
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

// DBとの接続を開始する
$pdo = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS, $options);

// PDO機能の中にある一部の設定項目を変更
//この矢印「->」は「$pdoの中の~という機能」という意味をもっており、PDO機能の中にある各種設定項目を選んで、機能をオンにしたり変更している
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOを使ったやり取りの中でエラーが起こった場合、特定のエラー用の対応を利用する。
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //PDOで取り扱う値を安全にやり取りするための初期設定をオフにする

// new PDO(データベースソフトの指定：どこに置いてあるソフトを使うのか;使用するデータベースの名前 ,ログインユーザー名 , ログインパスワード , その他オプション)

// mysqlがある場所 ➡ HOST定数
// 使用するデータベースの名前 ➡ DB_NAME定数
// mysqlにつながるユーザ名 ➡ USER定数
// mysqlにつながるパスワード ➡ PASS定数
// その他オプション ➡ $option変数
?>