<?php  
class adminmodel 
{
public $conn="";
public function __construct()
{
session_start(); //temporary variables that is used to store data one page to another page
// database connection
try 
{
$this->conn=new mysqli("localhost","root","","mvc-app");
//  echo "connection successfully";
}
catch(Exception $err)
{
echo $this->get_message();
//die(mysqli_error($this->conn));
}
}
//create a member function for insert all data
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

// create a member function for select and jin tables
public function selectjoin($table,$table1,$where)
{
$select="select * from $table join $table1 on $where";
$query=mysqli_query($this->conn,$select);
while($fetch=mysqli_fetch_array($query))
{
$arr[]=$fetch;
}
return $arr;
}

//create a member function for admin login 

public function adminlogin($table,$email,$password)
{
$select="select * from $table where email='$email' and password='$password'";
$query=mysqli_query($this->conn,$select);
$fetch=mysqli_fetch_array($query);
$num_row=mysqli_num_rows($query);
if($num_row==1)
{
$_SESSION["admin_id"]=$fetch["admin_id"];
$_SESSION["email"]=$fetch["email"];
$arr[]=$fetch;
return $arr;
}
else 
{
return false;
}
}

// create a member function for change password 
public function changepasssword($table,$column,$opass,$npass,$cpass,$adminid,$id)
{
$select="select $column from $table where $adminid='$id'";
$query=mysqli_query($this->conn,$select);
$fetch=mysqli_fetch_array($query);
$p=$fetch["password"];
if($p==$opass && $npass==$cpass)
{
$upd="update $table set $column='$npass' where $adminid='$id'";
$query=mysqli_query($this->conn,$upd);
return $query;
}
else 
{
return false;
}

}

// create a member function for edit   data
public function editalldata($table,$id,$edid)
{
$select="select * from $table where $id='$edid'";
$query=mysqli_query($this->conn,$select);
$fetch=mysqli_fetch_array($query);
$arr[]=$fetch;
return $arr;
}

// create a member function for update data
public function upddata($table,$data,$where,$id,$edid)
{
 //we stored $data in array using array_keys and array_values
 $kk=array_keys($data);
 $vv=array_values($data);
 //we stored $where in array keys and array values 
 $key=array_keys($where);
 //print_r($key);
 $value=array_values($where);
 $i=0;
 $k=0;
 $sql="update $table set ";
 $size=sizeof($data);
foreach($data as $v)
{
if($size==$i+1)
{
    $sql.="".$kk[$i]."='".$vv[$i]."'";
}
else
{
    $sql.="".$kk[$i]." = '".$vv[$i]."',";

}
$i++;
}
 // for $where
 $sql.=" where $id='$edid'";
 foreach($where as $val)
 {
 $sql.=" and ".$key[$k]." = '".$value[$k]."' ";
 $k++;
 }
 $query=mysqli_query($this->conn,$sql);
 return $query;

}

// create a member function for logout as admin
public function logout()
{
// unset a set id from session
unset($_SESSION["admin_id"]);
unset($_SESSION["email"]);
session_destroy();
return true;
}
}

?>