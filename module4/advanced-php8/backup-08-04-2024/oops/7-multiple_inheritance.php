<?php 
/*
what is multiple inheritance in oops ? 

Multiple inheritance is used to access multiple child class properties in a single parent class This is not supported 

multilevel so on  i.e called multilevel inheritance

Note : multiple inheritance in not supported in php and java

examples :  A => B => C=> D =>E

     Note : Inheritance is used by extends keyword 
     
   


*/

class A 
{
    public function Test1()
    {
        $name="My name is Brijesh"."<br>";
        echo $name;
    }
}

class B 
{
    public function Test2()
    {
        $name="My name is Rahul"."<br>";
        echo $name;
    }

}
class C extends A,B 
{
    public function Test3()
    {
        $name="My name is Deep"."<br>";
        echo $name;
    }
}

$obj=new C;
$obj->Test1();
$obj->Test2();
$obj->Test3();



?>