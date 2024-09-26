<?php 
/*
what is inheritance in oops ? 
      inheritance is used to access one parent class properties by another class i.e called inheritance
      or 
      parent class properties access by its child class i.e called inheritance 

Multilevel inheritance : A parent class properties access by its  child class and its access multilevel so on  i.e called multilevel inheritance


examples :  A => B => C=> D =>E

     Note : Inheritance is used by extends keyword 
     
   
     class A 
     {
        member function()
        {
            statements;
        } 
     }

     class B extends A 
     {
        member function()
        {
            statements;
        }
     }
      
    //create object 
    // call member functions   
     

*/

class A 
{
    public function Test1()
    {
        $name="My name is Brijesh"."<br>";
        echo $name;
    }
}

class B extends A 
{
    public function Test2()
    {
        $name="My name is Rahul"."<br>";
        echo $name;
    }

}
class C extends B 
{
    public function Test3()
    {
        $name="My name is Deep"."<br>";
        echo $name;
    }
}

class D extends C 
{
    public function Test4()
    {
        $name="My name is Deepali"."<br>";
        echo $name;
    }
}

$obj=new D;
$obj->Test1();
$obj->Test2();
$obj->Test3();
$obj->Test4();


?>