<?php
// =========        
// ↓　➀index.htmlから「コース」と「人数」のデータを取得する変数へ作り変えよう
$cose = $_GET['cose'];
$member = $_GET['member'];
// =========


// =======
// ↓　➁条件分岐を使って、４つのコースごとに予算,コース名,画像名を用意できるようにしよう
// =======
$cost = 0;
if ($cose == '101') {
    $cost = 3500 * $member * 1.1;
    $cose_name = '特選てっぱん焼きコース';
    $image = 'teppan.jpg';
} else if ($cose == '102') {
    $cost = 2800 * $member * 1.1;
    $cose_name = '海の幸グリルコース';
    $image = 'seafood.jpg';
} else if ($cose == '103') {
    $cost = 2900 * $member * 1.1;
    $cose_name = '山の幸グルメコース';
    $image = 'mountainfood.jpg';
} else {
    $cost = 1800 * $member * 1.1;
    $cose_name = 'ガーリックライスコース';
    $image = 'garlicrice.jpg';
}

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
            <li class="choice">予約手続き</li>
            <li>予約完了</li>
        </ul>

        <h3>ご確認ください</h3>
        <div class="confirm">
            <ul>
                <!-- ➂index.htmlから受け取った値を表示してみよう -->
                <li>コース： <?php echo $cose_name ?></li>
                <li>人数： <?php echo $member ?>人</li>
                <li>合計金額：<?php echo $cost ?>円 (税込み)</li>
            </ul>
            <figure>
                <!-- ➂選んだコース画像を表示できるようにしよう -->
                <img src="<?php echo "images/" .$image; ?>">
            </figure>
        </div>

        <h3>上記の内容でお間違いがなければ、お客様情報をお願いいたします。</h3>
        <!-- ➃送信方法の設定を決めましょう。 -->
        <form action="thanks.php" method="post">
            <ul class="perosna">
                <!-- ➄入力項目を必須化させよう -->
                <!-- ➄プレースホルダを使って、氏名の箇所をわかりやすくしてみよう-->
                <li>
                    <label>ご予約者名(必須)</label>
                    <div class="app_name">
                        <input type="text" name="name" class="name" required="required" placeholder="氏">
                        <input type="text" name="under_name" class="name" required="required" placeholder="名">
                    </div>
                </li>
                <li>
                    <label>連絡可能な電話番号(必須)</label>
                    <input type="tel" name="phone" required="required">
                </li>
            </ul>
            <!-- ➅送り先のthanks.phpに届けるために「見えないデータ」として、コース名と料金を配置してみましょう -->
            <input type="hidden" name="cose_name" value="<?php echo $cose_name; ?>">
            <input type="hidden" name="cost" value="<?php echo $cost; ?>">
            <input type="hidden" name="image" value="<?php echo $image; ?>">

            <input type="reset" value="情報をリセット" />
            <input type="submit" value="予約完了" />
        </form>
    </div>

    <footer>
        <small>hoge@hogehoge.hri</small>
    </footer>
</div>
</body>

</html>