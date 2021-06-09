<?php
class House
{
  private $address;
  private $age;

  public function __construct($address, $age)
  {
    $this->address = $address;
    $this->age = $age;
  }

  public function getAddress()
  {
    return "$this->address $this->age";
  }
}
