<?PHP
// ➀confirm.phpからPOSTで受け取れるようにしましょう。
$name = $_POST['name'];
$under_name = $_POST['under_name'];
$phone = $_POST['phone'];
$cose_name = $_POST['cose_name'];
$cost = $_POST['cost'];
$image = $_POST['image'];


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
    <header>
        <h1>DawnRestrant ~SABAMISO~</h1>
    </header>

    <div id="content">
        <ul class="procedure">
            <li>コース選択</li>
            <li>予約手続き</li>
            <li class="choice">予約完了</li>
        </ul>

        <h2>ご予約ありがとうございます</h2>
        <p class="thanks">以下の内容で承りました。当時のご来店、お待ちしております。</p>

        <dl>
            <!-- ➁confrim.phpから受け取ったデータを表示しましょう。 -->
            <div class="app_content">
                <dt>ご予約者のお名前</dt>
                <dd><?php echo $name . $under_name;?>　様</dd>
                <dt>店舗からの連絡可能な電話番号</dt>
                <dd><?php echo $phone ?></dd>

                <dt>ご希望コース</dt>
                <dd><?php echo $cose_name ?></dd>
                <dt></dt>
                <dd class="img"><img src="<?php echo "images/" .$image; ?>"></dd>
            </div>
            <div class="app_content">
                <dt>料金</dt>
                <dd>￥<?php echo $cost ?>円</dd>
            </div>
        </dl>
        <!-- ➂最初のindex.htmlに戻るリンクを書こう -->
        <form action="index.html">
            <input type="submit" value="予約トップへ戻る">
        </form>
    </div>
    <footer>
        <small>hoge@hogehoge.hri</small>
    </footer>
    </div>
</body>

</html>