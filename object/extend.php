<?php
// ===継承===

// 親クラス
class User{
    public $name = 'DAWN太郎';

    public function hello(){
        echo $this->name . 'はUserクラスからきてます';
        echo '<br>';
    }

    // ↓finalを追加すれば、finalを追加したプロパティやメソッドを継承しないように設定できる。
    // final public function hello(){
    //     echo $this->name.'はUserクラスからきてます';
    //     echo '<br>';
    // }
}

// 子クラス
class Admin extends User{
    public function hi(){
        echo '<p>下のテキストは、Adminクラスから来ています。</p>';
        echo $this->hello(); //Userのhelloメソッドにfinalを使っていた場合、「$this->hello( );」は利用することができなくなる。
        echo '<br>';
    }
}

class User1 extends User{
    public function yeah(){
        echo '<h2>以下はyeahメソッドの処理結果です！</h2>';
        echo $this->hello(); //Userのhelloメソッドにfinalを使っていた場合、「$this->hello( );」は利用することができなくなる。
        echo '<br>';
    }
}

// インスタンスの作成
$user = new User();
$admin = new Admin();

echo $user->name . '<br>'; //表示結果 → DAWN太郎
$user->hello(); // 表示結果 → DAWN太郎はUserクラスからきてます
$admin->hello(); // 表示結果 → DAWN太郎はUserクラスからきてます
$admin->hi(); // 表示結果 → 下のテキストは、Adminクラスから来ています。 （改行を挟んで） DAWN太郎はUserクラスからきてます
?>