<?php
// when we create any class as final we can not inherit that class in another class 
final class A 
{
    public function display1()
    {
        echo "Hi i am final class";
    }

}

class B extends A 
{
    public function display2()
    {
        echo "Hi i am not able to extends class";
    } 
}

$obj=new B;
$obj->display1();
$obj->display2();

?>