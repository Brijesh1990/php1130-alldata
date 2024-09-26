<?php 
// access specifier : we used private | public | protected

// access modifier : we used private | public | protected

// data visibility process : we used private | public | protected


// private : private is a member function we used to access a  class properties only within class 

// public :public is a member function we used a class properties any where of scope of functions or class .

// protected : protected can be access by only its one child class properties thare we used protectd


//Note : default is always public

class Person 
{
    public $public="I am Public";
    private $private="I am Private";
    protected $protected="I am protected";

    public function display()
    {
        echo $this->public."<br>";
        echo $this->private."<br>";
        echo $this->protected."<br>";
    }
}


$obj=new Person;
echo $obj->public."<br>";  //public will accessible
echo $obj->private."<br>"; // not assessible error
echo $obj->protected."<br>"; // not assessible error





?>