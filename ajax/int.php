<?php
// header関数では「JSONで来るデータの文字コードをUTF-8で認識する」という設定をしている
header('Content-type: application/json; charset=UTF-8');
// filter_input関数を使用して、JQueryから送られたvalue変数の値を取得している
$text = filter_input(INPUT_GET, 'val');

$data = [];

if ($text == '3の倍数') {
    $data = [3, 6, 9, 12, 15];
} else if ($text == '4の倍数') {
    $data = [4, 8, 12, 16, 20];
} else if ($text == '5の倍数') {
    $data = [5, 10, 15, 20, 25];
} else if ($text == '6の倍数') {
    $data = [6, 12, 18, 24, 30];
}

// json_encode関数とは、文字列や配列などの変数をJSON形式に変換してくれる関数
echo json_encode($data);
exit; //処理の終了

?>