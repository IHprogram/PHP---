<?php
class User
{
  public $name;
  public $age;
  public $hobby;

  public function __construct($name,$age,$hobby)
  {
      echo $name."<br>";
      echo $age."<br>";
      echo $hobby."<br>";
  }
}
?>