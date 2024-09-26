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


class B
{
    use A;
}
$obj=new B;
$obj->display();



?>