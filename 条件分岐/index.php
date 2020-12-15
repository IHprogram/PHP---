<?php
// もし変数$textが「条件分岐」という文字列だったら、$textを出力する。
$text = "条件分岐";
$number = 8;
if ($text == "条件分岐") {
   echo $text ;
} else {
  echo $number ;
}
?>

<!-- if, else, else ifを用いた条件分岐 -->
<?php
$name = 'DAWN太郎' ;

// 下記の条件分岐内で、３つの分岐を完成してください
if($name == 'DAWN次郎' ) {
    echo "名前がIFで一致した";
}
else if ( $name == 'DAWN太郎' ) {
    echo "名前がELSE IFで一致した";
}
else {
    echo "名前は一致しなかった";
}
?>