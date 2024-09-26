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
 public $name="Brijesh kumar pandey";    
 public function __construct()
 {
    echo $this->name;
 }
}
$obj=new A;

?>