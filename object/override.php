<?php
//===オーバーライド===

// 親クラス
class User{
    public $name = 'DAWN太郎';

    public function hello(){
        echo $this->name;
        echo '<br>';
    }
}

// 子クラス
class Admin extends User{
    public function hello(){
        echo 'DAWN花子';
        echo '<br>';
    }

    public function Hi(){
        parent::hello(); // 親クラスであるUserクラスのhelloメソッドを使用できる
                         // 「parent::」で「親クラスの～」という指定が可能となる
                         
        // $this->hello(); → この記述では「DAWN花子」と表示される。
    }
}

// インスタンス化(外部)
$admin = new Admin();

$admin->hello();
//↑ UserとAdminのどちらのhelloメソッドが実行される？
// → Adminのhellメソッドが実行され、「DAWN花子」と表示される。（オーバーライドの発生）

$admin->Hi();
?>