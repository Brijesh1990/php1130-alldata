<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
    //database connection 
     try 
     {
        $this->conn=new mysqli("localhost","root","","mvc-my-app");
        // echo "Connection stablished successfully";
     }
     catch(Exception)
     {
        die(mysqli_error($this->conn));
     }
    }
}


?>