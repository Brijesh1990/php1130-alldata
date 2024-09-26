<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
        $this->conn=new mysqli("localhost","root","","addtocart_mvc");
    }
    // create a member function for add products
    public function insertalldata($table,$data)
    {
     //convert columns array as string
      $column=array_keys($data);
      $column1=implode(",",$column);
    //convert values array as string 
      $value=array_values($data);
      $value1=implode("','",$value);
      $insert="insert into $table ($column1) values ('$value1')";
      $query=mysqli_query($this->conn,$insert);
      return $query;   
     
    }

    // select all data create a member functions 
    public function selectalldata($table)
    {
        $select="select * from $table";
        $query=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($query))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
//    total count added product in cart
    public function totalcount($table,$column)
    {
        $select="select count($column) as total  from $table";
        $query=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($query))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
}

?>