<?php 
error_reporting(0);
/* encapsulation : encapsulation is a process of oops where we wrapping up data in a single object there we used encapsulations. 
Wrapping up data member and method together into a single unit is called Encapsulation.

*/

class A 
{
    public $nm;
    public $ag;
    public function __construct($name,$age)
    {
         $this->nm=$name."<br>";
         $this->ag=$age."<br>";

    }
    public function setAge($a)  
    {  
   
     $this->a=$a;  
   
    }  
    
    public function display()  
   
    {  
   
     echo  "welcome ".$this->nm."<br/>";  
   
     return $this->ag-$this->a;  

    } 
}  

$obj=new A("brijesh",34);
$obj->setAge(1);
echo "You are :".$obj->display()."Years Old";

?>