<?php
$price = 2400;

// switchの後の()に、対象となる変数や値を入れる。
// その対象と、caseの後に続く条件の値が一致したら、caseの中身の処理が実行される。


switch ( $price ) {
  case 2000: // ← 「:（コロン）」であることに注意！！
    echo "2000円です";
    // 以下のbreakは、SWITCH処理から脱出するための対応。SWITCH文を書くときに必須の記述。
    // break処理を記述していないと、次のcaseの処理が条件に一致しているしていない関係なく実行されてしまうので、必ず記述すること。
    break;
  case 2400:
    echo "2400円です";
    break;
  case 3000:
    echo "3000円です";
    break;
}
?>