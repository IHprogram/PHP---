<?php
// アクセス権がpublicの場合
// 3つのアクセス権（public、protected、private）のうち、もっとも権利が厳しい（狭い）のがprivate
// ここでは、同じUserクラス内のhello()メソッドには$nameプロパティは使える
// だが、継承先であるAdminクラスでは、Userクラスの$nameプロパティは使えない
// つまり、同じクラス内なら利用はできるが、継承先の子クラスとインスタンス化後の利用はできない

// 親クラス
class User{

    private $name = "DAWN太郎"; // 利用できる

    private function hello(){ //利用できる
        echo $this->name;
    }
}

// 子クラス
class Admin extends User{

    public function hi(){ // エラーが起きる
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