<?php
class Parents
{
public function example()
{
echo "Hello";
}
}
trait Mother
{
public function examplem()
{
echo " \t Meow <br/>";
}
}
trait Father
{
public function examplem()
{
echo "\t Meow <br/>";
}
}
class Child extends Parents
{
use Mother;
public function MultipleInheritance()
{
echo "how are you meow meow? <br/>";
}
}
$check = new Child();
$check->example();
$check->examplem();
$check-> MultipleInheritance( );
?>


