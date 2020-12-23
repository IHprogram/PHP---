<?php
//デバックの仕方
$dawn = "デバック！！";

var_dump($dawn); //デバッグ関数
echo "<br>";
print_r($dawn); //デバッグ関数

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

print_r($result[0]);
?>