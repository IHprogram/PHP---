<!-- URL: http://localhost:8888/ServerSideCurriculum/TASK02_on_chapter3/list.php -->


<?php

// PDO接続先の設定（後から変更できないように「定数」で定義）
define("HOST", "localhost");
define("DB_NAME", "task02");
define("USER", "root"); // MAMPのユーザー名
define("PASS", "root"); // MAMPのパスワード

// 文字化けを防ぐ（「文字コードはutf8で対応する」という設定）
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

?>

<!-- ここから、ページに表示するフロントです -->
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/reset.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/responsive.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- JQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/base.js"></script>

        <title>3章CRUD実装-課題-</title>
    </head>

    <body>

    </body>

</html>