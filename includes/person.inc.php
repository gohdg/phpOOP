<?php

class Person
{
  // Properties
  private $name;
  private $eyeColor;
  private $age;

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

  public function getName()
  {
    return $this->name;
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
