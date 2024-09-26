<?php 
// when we create any method as final we can not override any another method 
class A 
{
    public final function display($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c;

    }
}

class B extends A 
{
  public function display($a,$b)
    {
        $c=$a*$b;
        echo "Multiplications  of numbers is :".$c;

    }
}

$obj=new B;
$obj->display(10,20)

?>