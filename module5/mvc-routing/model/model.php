<?php  
class model 
{
public $conn="";
public function __construct()
{
 session_start();   
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
// create a member function for select all data
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

// create a member function for select all data and get category food
public function selectcategoryfood($table,$column,$id)
{
$select="select * from $table where $column='$id'";
$query=mysqli_query($this->conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;

}
return $arr;
}

// create a member function for insert data
public function insertalldata($table,$data)
{

$key=array_keys($data);
$key1=implode(',',$key);

$value=array_values($data);
$value1=implode("','",$value);

$insert="insert into $table($key1) values ('$value1')";
// echo $insert; exit();
$query=mysqli_query($this->conn,$insert);
// echo $query; exit();
return $query;
} 

// create a member funtion for customers Login panel

public function customerlogin($table,$email,$password)
{
$select="select * from $table where email='$email' and password='$password'";
$query=mysqli_query($this->conn,$select);
$fetch=mysqli_fetch_array($query);
$num_row=mysqli_num_rows($query);
if($num_row==1)
{
$_SESSION["customer_id"]=$fetch["customer_id"];
$_SESSION["name"]=$fetch["name"];
$_SESSION["email"]=$fetch["email"];
$arr[]=$fetch;
return $arr;
}
else 
{
return false;
}
}

// create a member function for join tables 
public function joindata($table,$table1,$table2,$where,$where1,$column,$id)
{
  $select="select * from $table join $table1 on $where join $table2 on $where1 where $table1.$column='$id'";
   $query=mysqli_query($this->conn,$select);
   while($fetch=mysqli_fetch_array($query))
  {
   $arr[]=$fetch;

  }
  return $arr;
 
}
// create a member function for count
public function selectcount($table,$column,$column1,$id)
{
$select="select count($column) as total from $table where $column1='$id'";
$query=mysqli_query($this->conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;

}
return $arr;
}

// create a member function for forget password
public function frgpassword($table,$column,$email)
{
$select="select $column from $table where email='$email'";
$query=mysqli_query($this->conn,$select);
$fetch=mysqli_fetch_array($query);
$num_rows=mysqli_num_rows($query);
if($num_rows==1)
{
$pass=base64_decode($fetch["password"]);
return $pass;
}
else 
{
  return false;
}
}

// create a member function for total of subtotal
public function selectsubtotal($table,$column,$column1,$id)
{
$select="select sum($column) as total from $table where $column1='$id'";
$query=mysqli_query($this->conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;

}
return $arr;
}

// delete particular  data
public function deletedata($table,$id)
{

$key=array_keys($id);
$key1=implode(',',$key);
$value=array_values($id);
$value1=implode("','",$value);
$delete="delete from  $table where $key1='$value1'";
// echo $insert; exit();
$query=mysqli_query($this->conn,$delete);
// echo $query; exit();
return $query;
} 

// create a member function for logout as customers
public function logout()
{
unset($_SESSION["customer_id"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();
return true;
}

}

?>