<?php 
/* constructor is same name of class when we called the object of any class constructor automatically called
    
*/ 

// class A 
// {
//  public function display()
//  {
//     $name="Brijesh";
//     echo $name;
//  }
// }
// $obj=new A;
// $obj->display();



class A 
{
 public function __construct()
 {
    $name="Brijesh";
    echo $name;
 }
}
$obj=new A;

?>