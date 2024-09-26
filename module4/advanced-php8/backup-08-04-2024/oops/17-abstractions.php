<?php 
/* this is an features of oops
   Abstract class is used to hide some internal data from some users 
   Abstract class is used for security reasons
   Abstract is  never created object of class
   if we create abstract class we never create the object of that class
   Abstract class is always access by inheritance 

*/

abstract class A 
{
    public function display()
    {
        $name="hi i am sumeet"."<br>";
        echo $name;
    }
}

class B extends A 
{
    public function display1()
    {
        $name="hi i am Deep";
        echo $name;
    }
}

$obj=new B;
$obj->display();
$obj->display1();


?>