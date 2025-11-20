<?php

class User{
  const AGE = 25;

  public static $name = "Markus";
  public static function greets(){
    return "Hello";
  }
};


class Hobby extends User{
  public static function cooking(){
    return parent::greets();
  }
}


echo User::$name;
echo User::greets();
echo User::AGE;

echo Hobby::cooking();



?>
