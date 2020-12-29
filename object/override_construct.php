<?php
// 親クラス
class User{
    public $name = 'DAWN太郎';

    //↓ 「__construct」はコンストラクタメソッドと呼ばれる。
    //「インスタンスが作成された（ここでは『new User()』）時点で自動的に実行される処理」を行ってくれる役割を持っている
    public function __construct(){
        echo 'Userクラスのコンストラクタが実行される<br>' ;
    }
}

// 子クラス
class Admin extends User{
    public function __construct(){
        // ↓ 親クラスのコンストラクタメソッドの内容も利用したい場合は、以下のように「parent::」を活用する
        parent::__construct();
        echo 'Adminクラスのコンストラクタが実行される<br>' ;
    }
}

// インスタンス作成
$admin = new Admin(); 
// ブラウザには以下のように表示される。

// Userクラスのコンストラクタが実行される
// Adminクラスのコンストラクタが実行される
?>