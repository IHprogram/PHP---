<!-- 関数 -->

<?php
// test関数を用意する
function test1(){
  echo "関数のサンプル集です。<br>";
  echo "上の文章とこの文章は、一つの関数内で実行されています。<br>";
}
test1();
?>


test1();
<!-- ↑ 使用するには<#?php ◯◯?>で囲まなくてはならない -->

<?php
test1();
?>

<!-- 引数の利用 -->
<?php
function test2($first, $second){
  echo "関数の".$first."です。<br>";
  echo "上の文章とこの文章は、一つの".$second."で実行されています。<br>";
}

// test2関数の中身を実行する
test2('引数解説','関数と2つの引数');
?>

<!-- 戻り値について(関数の中にあり、外で使わせたい値のこと) -->
<?php
function tax($rate, $i){
  $multiplie = $rate * $i; //7500円が入る
  $result = $multiplie * 1.10; //8250円が入る
  return $result; //returnをつけることで、この税込み価格の値が入っている$result変数を、関数の外部にある$price変数に渡している。
}

$price = tax(1500, 5);
echo "税込みで{$price}円となります。";
?>

<!-- 組み込み関数(公式が用意している関数) -->
<?php

$text = "12";
$array = [0, 1, 2];

// intval関数(データの型を文字列から数値に変換することができる)
$sum = intval($text) + 3;
echo $sum . "<br>"; // 15という数値が表示される
?>

<?php
// count関数（配列に何この値が入っているかを算出する）
$count = count($array);
echo $count;
?>

<?php
$text = "12";
$array = [0, 1, 2];

// 引数に指定した変数に、値や結果が入っているかを確認する関数
if (isset($text)){
  echo '変数$textは値が入っている変数です';
}
// 引数に指定した変数の中が、「空っぽ」または「NULL」といった時はtrue(正しい)という結果を返してくれる関数
if (empty($text)) {
  echo '変数$textは値が空でした<br>';
}
// 引数に指定した変数が、配列または連想配列であるかどうかを確認する関数
if (is_array($array)) {
  echo '変数$arrayは配列です。<br>';
}
?>

<?php
// ローカル変数のグローバル化
function g()
{
  global $x;
  $x = 3;
}
g();
echo $x;
?>
