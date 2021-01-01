<!-- ログイン画面のページ（今回はフォームに値が入っていればログインできるものになる） -->

<!DOCTYPE html>
<?php
    session_start();

    $errors = array();

    if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $pass = $_POST["pass"];

        if (!$username == "" && !$pass == "") {
            $_SESSION["username"] = $username;
            $_SESSION["pass"] = $pass;
            header("Location: index.php");
        } else {
            if ($username === "") {
                $errors["username"] = "ユーザー名が入力されていません。";
            }
            if ($pass === "") {
                $errors["pass"] = "パスワードが入力されていません。";
            }
        }
    }
?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>

<body>

    <?php
    if (isset($errors)){
        echo "<ul>";
        foreach($error as $value){
            echo "<li>" . $value . "</li>";
        }
        echo "</ul>";
    }
    ?>

    <form action="login.php" method="post">
        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
        <label>ユーザー名:</label>
        <input type="text" name="username" /><br>
        <label>パスワード：</label>
        <input type="text" name="pass" /><br>
        <!-- このファイルに再度飛んでログインできるかを確認させる -->
        <input type="submit" value="ログイン" name="submit">
    </form>


</body>

</html>