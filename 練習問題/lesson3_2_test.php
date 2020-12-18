<!-- 関数と条件分岐のテスト -->

<?php
function toeic($point){
    if($point < 400){
        $level = '英検3~5級程度';
    }elseif($point >= 400 && $point < 500){
        $level = '英検準2級程度';
    //➀残りの条件も作ってあげよう
    }elseif($point >= 500 && $point < 600){
        $level = '英検2級程度のレベル';
    }elseif($point >= 600 && $point < 700){
        $level = '英検準2級A程度のレベル';
    }elseif($point >= 700 && $point < 800){
        $level = '英検準2級A~準1級程度のレベル';
    }elseif($point >= 800 && $point < 900){
        $level = '英検準1級程度のレベル';
    }elseif($point >= 900 && $point <= 990){
        $level = '英検1級度のレベル';
    }
    //➁戻り値で英検がどのレベルかを渡してあげるようにしよう
    return $level;
}


//➂toeic関数の結果が入る$text変数に定義しよう
$text = toeic(950);
echo "あなたの英語力は{$text}となります。";
?>
