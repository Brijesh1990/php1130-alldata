<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
         parent:: __construct();
        //print hello world
        // $name="Hello world";
        // echo $name; 
        
        // check avaialability inside of array
        // $name=array("pinakin","dhruv","rajesh","rahul","brijesh");
        // if(in_array("brijesh",$name))
        // {
        //  echo "Yes This name already registered with Us!";
        // }
        // else 
        // {

        //     echo "Sorry  This name is not registered with Us!";
        // }

        // print your dynamic name 
        if(isset($_POST["chk"]))
        {
            $nm=$_POST["name"];
            echo "<h2 align='center' style='color:green; text-align:center'>My name is :$nm</h2>";
        }
        else 
        {
            
            echo "<h2 align='center' style='color:red; text-align:center'>Something went wrong</h2>";
        }

    }

}
$obj=new controller;
?>