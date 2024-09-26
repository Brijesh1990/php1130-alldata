<?php
/*
what is pseudo variables ?
  pseudo variables are used to declared any variables before any member function and called inside or access inside of member functions using pseudo variables.
  pseudo variables is called via $this symbol.


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

// class Name 
// {
//     public $name="My name is Brijesh";
//     public function display()
//     {
//     //    echo $name;  warning generate 

//       echo $this->name;

//     }
// }
// // create an object of class Name 
// $obj=new Name;
// $obj->display();

class Name 
{
    public $name="Brijesh";
    public $age=34;
    public function display()
    {
     echo "My name is :".$this->name."<br>"."My age is :".$this->age;
    }
}
// create an object of class Name 
$obj=new Name;
$obj->display();




?>