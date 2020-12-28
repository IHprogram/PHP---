<?php
// インクルード処理。commmon.phpに書かれている処理を呼び出す。
require_once("common.php");
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/reset.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/responsive.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>3章CRUD実装-課題-</title>
  </head>

  <body>
    <header>
      <div class="icon">
          <a href="list.php">
              <img src="./img/DAWN_icon.png" alt="icon">
          </a>
      </div>
      <h1>リストの更新<br><span class="sub">-update-</span></h1>
    </header>
    <div id="content">
      <form action="update.php?id=<?php echo htmlspecialchars($id); ?>" method="post" onsubmit="return check()" id="content">
          <h2>「ID：<span class="strong orange"><?php echo htmlspecialchars($id); ?></span>」の登録情報を以下の内容に変更します。</h2>
          <div class="form_input">
              <div class="username">
                  <label>ユーザー名</label>
                  <input type="text" name="username">
              </div>
              <div class="mail">
                  <label>メールアドレス</label>
                  <input type="mail" name="mail">
              </div>
          </div>
          <div class="form_btn">
              <div class="form_return_btn">
                  <p class="return"><a href="list.php">リスト表に戻る</a></p>
              </div>
              <div class="form_create_btn">
                  <input type="submit" value="更新する">
              </div>
          </div>
      </form>
    </div>
    <script type="text/javascript">
      function check() {
        if (window.confirm('更新をしてよろしいですか？')) { // 確認ダイアログを表示
            // 「OK」時は送信を実行
            return true;
        } else { // 「キャンセル」時の処理
            window.alert('更新がキャンセルされました'); // 警告ダイアログを表示
            // 送信を中止
            return false;
        }
      }
    </script>
  </body>
</html>

<?php
echo var_dump($id);
?>