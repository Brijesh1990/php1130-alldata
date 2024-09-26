<?php 
/* traits are defined in php 7 and 8 
   traits is used to inheritance in a simple way
   traits are used to access one child class properties by another class 

*/

trait A 
{
    public function display() 
    {
        $name="Hi my name is Brijesh"."<br>";
        echo $name;
    }
}

trait B
{
    public function display1() 
    {
        $name="Hi my name is Rahul"."<br>";
        echo $name;
    }
   
}

class C
{
    use A,B;
}
$obj=new C;
$obj->display();
$obj->display1();


?>