<?php 
/* when we completed any applications using same function pass with same arguments there we used method overriding.


*/

class A 
{
    function display($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c;

    }
}

class B extends A 
{
    function display($a,$b)
    {
        $c=$a*$b;
        echo "Multiplications  of numbers is :".$c;

    }
}

$obj=new B;
$obj->display(10,20)

?>