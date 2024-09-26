<?php 
/*
what is object ?
  An object is an instance of class
  An object is created via new keyword 
  Note : An object is an collection of class that is called object
  
  
*/
class Pet 
{
    public function Display()
    {
        $name="My pet name is Lucy";
        echo $name;
    }
}
// create an object 
// object is created via new Pet;
$ob=new Pet;
$ob->Display();
?>