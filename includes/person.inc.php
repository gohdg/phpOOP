<?php

class Person
{
  // Properties
  private $name;
  private $eyeColor;
  private $age;

  public static $drinkingAge = 21;

  //constructor
  public function __construct($name, $eyeColor, $age)
  {
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }

  // Methods
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getDA()
  {
    return self::$drinkingAge;
  }

  public static function setDrinkingAge($age)
  {
    self::$drinkingAge = $age;
  }
}

// class Pet extends Person
// {
//   public function owner()
//   {
//     $a = $this->first;
//     return $a;
//   }
// }
