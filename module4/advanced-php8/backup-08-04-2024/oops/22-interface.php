<?php 
/* interface is a solutions of supporting multiple inheritance 
   where we access a parent class properties by multiple child class 
     
*/

interface A 
{
    public function display1();
}

interface B 
{
    public function display2();
}

interface C 
{
    public function display3();
}

class D implements A,B,C  
{

    public function display1()
    {
        echo "Hi Brijesh"."<br>";
    }

    public function display2()
    {
        echo "Hi Deep"."<br>";
    }

    public function display3()
    {
        echo "Hi Rahul"."<br>";
    }

}

$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();

?>