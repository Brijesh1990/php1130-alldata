<?php
/*
what is class ?
  A class is a group of member and its member function that is called class.
  or 
  A class is a blue print of an  object
  or 
  A class is nothing whenever we can not create its object

 Note : we create an object of any class using new keyword
 
 
 syntax :  

  class className 
  {
    member function()
    {
        statements;
    } 
  }

//create an object
//call a member function 


*/

class Name 
{
    public function display()
    {
        $name="My name is Deep";
        echo $name;
    }
}
// create an object of class Name 
$obj=new Name;
$obj->display();




?>