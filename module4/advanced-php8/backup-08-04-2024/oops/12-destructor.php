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
class B extends A 
{
    public function __destruct()
    {
        echo "Hi i am destruct a constructor";
    }
}

$obj=new B;

?>