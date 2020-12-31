<?php
// isset関数
// 「isset(引数)」と記述する。引数には変数を指定する。
// 変数に値がセットされており、かつNULL出ない場合にTRUEを戻り値として返す

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // nameという名前をつけて / $_POST[‘username’]に入る値をクッキーに保存 / 有効期限は10秒
        setcookie('name', $_POST['username'], time() + 10);
        // passという名前をつけて / $_POST[‘password’]に入る値をクッキーに保存 / 有効期限は180秒
        setcookie('pass', $_POST['password'], time() + 180);
        header("Location: welcom.php");
    } else {
        // 時間をマイナスで計算する（time() - 1800のこと）ということは、有効期限がなしになるのと同じ。
        // つまり、「クッキーにある情報を破棄する」という役割へと変わる
        setcookie('name', $_POST['username'], time() - 1800);
        setcookie('pass', $_POST['password'], time() - 1800);
        var_dump('クッキーの破棄に成功');
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>

<body>
    <form action="login.php" method="post">
    <!-- 「name」と「pass」、それぞれのクッキー名で取得できる保存データがあるかどうかを確認している -->
        <?php if (!empty($_COOKIE['name']) && !empty($_COOKIE['pass'])) { ?>

            <!-- trueの場合、name属性が「username」と「password」で指定している<input>タグにおいて、
            初期値を置けるvalue属性でクッキーからの値を入力済状態で入れておく -->
            <label>ユーザー名</label>
            <!-- クッキーに保存してある値を、PHPで取り出す -->
            <!-- $_COOKIE[クッキー名] -->
            <input type="text" name="username" value='<?= $_COOKIE['name']; ?>'><br>
            <label>パスワード</label>
            <input type="text" name="password" value='<?= $_COOKIE['pass']; ?>'><br>

        <?php } else { ?>

            <!-- falseの場合は、以前と同じく何も入力されていない空の状態のフォームとなる -->
            <label>ユーザー名</label>
            <input type='text' name='username'><br>
            <label>パスワード<label>
            <input type='text' name='password'><br>

        <?php } ?>

        <input type="submit" value="ログイン" name="submit">
    </form>
</body>

</html>