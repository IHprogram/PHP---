<!-- エラー防止のための例外処理を学ぶ -->
<!-- TRY/CATCHとTHROW句を利用することで、
一連の処理中にエラーが起こった時の対策を行えるようになる。 -->

<?php
// price関数は消費税10%の時の価格を返す関数

function price($rate, $number)
{
  return $rate * $number * 1.10;
}

// ＄aが数値ではなく文字列なので、エラーが発生する。
$a = "二千四百";
$b = 5;

echo "お買い物の合計は";
echo price($a, $b);
echo "でした～～。";

// ↓↓↓ そこで登場するのがTRY/CATCHの構文

 try {
  //  例外の可能性のある処理群
 } catch( Exception $e ) {
  //  例外が起こった時の処理
 }
// tryでくくっている範囲内の処理で、エラー等の予期せぬ例外が発生した場合、
// 以降の処理が中断される。
// 代わりにcatchでくくられている処理の方を実行するという仕組みがTRY/CATCHの構文

// --------------------------------------------------------

// THROW句を使用した例外処理の書き方

try {
  $a = "二千四百";
  $b = 5;

  if (is_int($a) && is_int($b)) {
      echo "お買い物の合計は";
      echo price($a, $b);
      echo "でした～～。";
  } else {
    // throw new Exception('エラーメッセージ');」が今回追加されたTHROW句と呼ばれる部分
      throw new Exception('引数には数値以外を設定しないでください');
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

?>