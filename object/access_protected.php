<?php
// アクセス権がprotectedの場合
// publicをprotectedに変更すると、インスタンス化(外部)では利用できないが、同じ親クラス内と継承先の子クラスでは利用することができる
// ここでは、Userクラス内とAdminクラス内で利用できる。

// 親クラス
class User{

    protected $name = "DAWN太郎"; // → 利用できる 

    protected function hello(){ // → 利用できる 
        echo $this->name;
    }
}

// 子クラス
class Admin extends User{

    public function hi(){ // → 利用できる 
        echo $this->name;
    }
}


// インスタンス化(クラス外部)
$user = new User();
$admin = new Admin();


echo $user->name; // エラーが起きる

echo $admin->name; // エラーが起きる

$user->hello(); // エラーが起きる

$admin->hi(); // エラーが起きる

?>