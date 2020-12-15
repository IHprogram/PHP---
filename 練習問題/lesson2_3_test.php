<!-- 問題演習 -->
<!-- DAWNこうきさんの名前と職業を取り出して、
「DAWNこうきさんのお仕事は営業です。」と出力してください。 -->

<?php

$text =[
    [
        'name' => 'DAWNあかり',
        'age' => 18,
        'profession' => '学生'
    ],
    [
        'name' => 'DAWNよしひこ',
        'age' => 34,
        'profession' => 'パイロット'
    ],
    [
        'name' => 'DAWNこうき',
        'age' => 29,
        'profession' => '営業'
    ],
    [
        'name' => 'DAWNみつき',
        'age' => 41,
        'profession' => '管理部部長'
    ],
    [
        'name' => 'DAWNえり',
        'age' => 32,
        'profession' => 'イラストレーター'
    ]
];

//「DAWNこうき」さんのお仕事は？ に書き換えましょう。
echo "". $text[2][name] ."さんのお仕事は". $text[2]['profession'] ."です。";

// 正解！
?>