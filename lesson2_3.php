<!-- 配列 -->
<?php
$fruit = array ( "apple" , "orange" , "grape" , "peach" , "banana" ) ;

$fruit = [ "apple" , "orange" , "grape" , "peach" , "banana" ] ;

echo $fruit[0]; //appleが出力される。

// すでにある値の上書き、更新
echo ' <br> ';
$fruit[0] = "melon";
echo $fruit[0]; //melonが出力される。

// 新しい値の追加
echo ' <br> ';
$fruit[] = "strawberry" ;
echo $fruit[5];
?>



<!-- 連想配列 -->
<?php
$fruit = array (
    "red" => "apple" ,
    "purple" => "grape" ,
    "yellow" => "banana"
);

$fruit = [
    "red" => "apple" ,
    "purple" => "grape" ,
    "yellow" => "banana"
];

echo $fruit["purple"] ;

// 表示結果 :grape
?>



<!-- 多次元配列 -->
<?php
$users = array(
    array(
        "username" => "DAWNタロウ",
        "password" => "dawn_hogehoge01",
    ) ,
    array(
        "username" => "DAWNマリー",
        "password" => "dawn_hogehoge02",
    )
);

echo $users[1]["username"]; // DAWNマリーと出力される。
echo $users[0]["password"]; // dawn_hogehoge02と出力される。
?>