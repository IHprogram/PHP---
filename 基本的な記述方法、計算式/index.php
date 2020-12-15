<?php
echo "hello php!";
// ターミナルで出力する方法は「php index.php」
?>

<?php
echo 5 + 7 ; // 計算式。12が出力される
echo '<br>' ;
echo "5 + 7" ; // "5 + 7"という文字列として扱われる

// これまで学んできたことと同じく、-は引き算、*は掛け算、/は割り算、%は余り
?>


<?php
// 計算式の省略形の書き方
$number = 30;

$number + 10; // ➡ $number += 10
$number - 10; // ➡ $number -= 10
$number * 10; // ➡ $number *= 10
$number / 10; // ➡ $number /= 10
$number % 10; // ➡ $number %= 10
?>