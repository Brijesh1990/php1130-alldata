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

// class A 
// {    
//  public function __construct($name,$age,$address)
//  {
//     echo "My name is :".$name."<br>"."My age is :".$age."<br>"."Our address is :".$address;
//  }
// }
// $obj=new A("brijesh",34,"150 feet ring road rajkot");


// class A 
// {
//     public function __construct()
//     {
//         echo "My name is : Brijesh"."<br>";
//     }
// }
// class B extends A 
// {
//     public function __construct()
//     {
//         echo "My name is :Deep";
//     }
// }
// $obj=new B; 





// class A 
// {
//     public function __construct()
//     {
//         echo "My name is : Brijesh"."<br>";
//     }
// }
// class B extends A 
// {
//     public function display()
//     {
//         echo "My name is :Deep";
//     }
// }
// $obj=new B;
// $obj->display(); 


class A 
{
    public function display()
    {
        echo "My name is : Brijesh"."<br>";
    }
}
class B extends A 
{
    public function __construct()
    {
        echo "My name is :Deep";
    }
}
$obj=new B;



?>