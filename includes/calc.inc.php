<?php
declare(strict_types=1);
include "class-autoload.inc.php";

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc1 = new Calc($oper, (int) $num1, (int) $num2);

try {
  echo $calc1->calculator();
} catch (TypeError $e) {
  echo "Error!: " . $e->getMessage();
}

?>
