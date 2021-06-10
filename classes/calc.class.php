<?php
class FirstClass
{
  const EXAMPLE = "You can't change this!";

  public static function test()
  {
    $testing = "This is a test!";
    return $testing;
  }
}

// $a = FirstClass::EXAMPLE;
// echo $a;
// echo "<br>";
// echo FirstClass::test();

class SecondClass extends FirstClass
{
  public static $staticProperty = "A static property!";

  public static function anotherTest()
  {
    echo parent::EXAMPLE;
    echo self::$staticProperty;
  }
}

$b = SecondClass::anotherTest();
echo $b;
