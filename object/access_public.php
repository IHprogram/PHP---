<?php
// アクセス権がpublicの場合
// 3つのアクセス権（public、protected、private）のうち、もっとも権利が緩い（広い）のがpublic。


// 親クラス
class User{

    public $name = 'HRI太郎'; // → 利用できる 

    public function hello(){ // → 利用できる 
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


echo $user->name . '<br>'; // → 利用できる 

echo $admin->name . '<br>'; // → 利用できる 

$user->hello(); // → 利用できる 
echo '<br>';

$admin->hi(); // → 利用できる 
?>