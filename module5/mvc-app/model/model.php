<?php 
class model 
{
    public $con="";
    public function __construct()
    {
    // database connections 
     try 
     {
        $this->con=new mysqli("localhost","root","","ecomm-app");
        echo "successfully connected";
     } 
     catch(Exception)
     {
      die(mysqli_error($this->con));
     }

    }
}

?>