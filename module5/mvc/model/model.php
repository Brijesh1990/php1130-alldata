<?php  
class model 
{
    public $conn="";
    public function __construct()
    {
        // database connection
        try 
        {
         $this->conn=new mysqli("localhost","root","","mvc-app");
        //  echo "connection successfully";
        }
        catch(Exception)
        {
            die(mysqli_error($this->conn));

        }
    }
}

?>