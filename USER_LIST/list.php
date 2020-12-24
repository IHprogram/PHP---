<!-- URL: http://localhost:8888/ServerSideCurriculum/TASK02_on_chapter3/list.php -->

<?php

require_once("common.php");

$sql = "SELECT * FROM users ORDER BY id ASC;"; // MySQLの文章を文字列として格納している
$stmt = $pdo->query($sql); // MySQLからデータを取得。「->query(MySQLのコマンド)」を使えば、、MySQLからデータを持ってきたり、追加や削除,更新などを実行することができる。
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); // MySQLから取ってきたデータは、そのままだとPHP内では扱いづらい形となっているので、PHPの配列,連想配列の形式に変更するという処理を行っている。

// 以下、$resultの中身（配列の中に連想配列が入っていると言う、多次元配列になっている）
// $result = [
//     0 => [
//     “id” => “”,
//     “username“ => “”,
//     “mail” => “”
//     ],
// 1 => [
//     “id” => “”,
//     “username“ => “”,
//     “mail” => “”
//     ]
//     ...
// ]

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
        <header>
            <div class="icon">
                <a href="#">
                    <img src="./img/DAWN_icon.png" alt="icon">
                </a>
            </div>
            <h1>リストの表示<br><span class="sub">-list-</span></h1>
        </header>

        <div id="content">
                <table style="border-collapse: separate">
                        <tr>
                            <td class="id">ID</td>
                            <td class="name">NAME</td>
                            <td class="mail">MAIL</td>
                            <td class="up">EDIT</td>
                            <td class="dele">DELETE</td>
                        </tr>
                    <?php foreach ($result as $list) { ?>
                        <tr>
                            <td class="id"><?php echo $list["id"]; ?></td>
                            <td class="name"><?php echo $list["username"]; ?></td>
                            <td class="mail"><?php echo $list["mail"]; ?></td>
                            <td class="up">
                                <a href="update_form.php">
                                    <i class="fas fa-file-alt"></i>
                                </a>
                            </td>
                            <td class="dele">
                                <a href="delete.php">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
        </div>
    </body>

</html>

<!-- デバックの仕方
$dawn = "デバック！！";

var_dump($dawn);
echo "<br>";
print_r($dawn);

$year = 2020;
if ($year === 2019) {
    // 表示されたら、こちらの処理が働いていることを確認できる。
    var_dump("値が違っている");
} else {
    echo "<br>";
    echo $year ;
}
echo "<br>";
echo "<br>";

var_dump($result[0]);

echo "<br>";
echo "<br>";

print_r($result[0]); -->