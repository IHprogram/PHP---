<?php
// ===継承===

// 親クラス
class User{
    public $name = 'DAWN太郎';

    public function hello(){
        echo $this->name . 'はUserクラスからきてます';
        echo '<br>';
    }
}

// 子クラス
class Admin extends User{
    public function hi(){
        echo '<p>下のテキストは、Adminクラスから来ています。</p>';
        echo $this->hello();
        echo '<br>';
    }
}

// インスタンス化
$user = new User();
$admin = new Admin();

echo $user->name . '<br>'; //表示結果 → DAWN太郎
$user->hello(); // 表示結果 → DAWN太郎はUserクラスからきてます
$admin->hello(); // 表示結果 → DAWN太郎はUserクラスからきてます
$admin->hi(); // 表示結果 → 下のテキストは、Adminクラスから来ています。 （改行を挟んで） DAWN太郎はUserクラスからきてます
