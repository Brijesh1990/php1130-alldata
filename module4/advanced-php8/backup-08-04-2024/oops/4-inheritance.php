<?php 
/*
what is inheritance in oops ? 
      inheritance is used to access one parent class properties by another class i.e called inheritance
      or 
      parent class properties access by its child class i.e called inheritance 

       examples :  A => B

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

$obj=new B;
$obj->Test1();
$obj->Test2();


?>