<?php

require_once('class.php');

// ↓インスタンス
$taro = new User("太郎", 25, "美術館巡り！！");

// $nameに太郎のテキストが入り、$ageに25の数字が入る
$taro->name = "太郎";
$taro->$age = 25;

echo $taro->name . "<br>";
echo $taro->$age . "<br>";
