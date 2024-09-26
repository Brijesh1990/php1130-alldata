<?php 
/* when we completed any applications using same function pass with different arguments there we used method overloading.


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
    function display($d,$e,$f)
    {
        $g=$d*$e*$f;
        echo "Multiplications  of numbers is :".$g;

    }
}

$obj=new B;
$obj->display(10,20,30)

?>