<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
public function __construct()
{
parent:: __construct();
// insert a burger category in admin logic
if(isset($_POST["add-category"]))
{
$catnm=$_POST["categoryname"];
$date=$_POST["added_date"];
$data=array("categoryname"=>$catnm,"added_date"=>$date);
//print_r($data);
// echo $data; exit();
$chk=$this->insertalldata('tbl_addburgercategory',$data);
if($chk)
{
echo "<script>
alert('Your Category added successfully')
window.location='addburger-category';

</script>";
}
}
// fetch food category data
$cat=$this->selectalldata('tbl_addburgercategory');

// admin logged in logic 
if(isset($_POST["login_btn"]))
{

$email=$_POST["email"];
$password=$_POST["password"];
$chk=$this->adminlogin('tbl_admin',$email,$password);
if($chk)
{
echo "<script>
alert('You are Logged in as Admin Successfully')
window.location='dashboard';
</script>";
}
else 
{

echo "<script>
alert('Your email and password are Incorrect try again')
window.location='./';
</script>";
}

}

// add food of burger
if(isset($_POST["add-food"]))
{
$catnm=$_POST["categoryname"];
$burgername=$_POST["burgername"];
// upload images
$tmp_name=$_FILES["photo"]["tmp_name"];
$path="uploads/".$_FILES["photo"]["name"];
$type=$_FILES["photo"]["type"];
$size=$_FILES["photo"]["size"]/1024;
move_uploaded_file($tmp_name,$path);
$qty=$_POST["qty"];
$oldprice=$_POST["old-price"];
$newprice=$_POST["new-price"];
$details=$_POST["details"];
$addate=$_POST["added_date"];
$data=array("category_id"=>$catnm,"foodname"=>$burgername,"photo"=>$path,"qty"=>$qty,"oldprice"=>$oldprice,"newprice"=>$newprice,"descriptions"=>$details,"addeddate"=>$addate);
$chk=$this->insertalldata('tbl_addfood',$data);
if($chk)
{
echo "<script>
alert('Your Food added successfully')
window.location='addburger-food';
</script>";
}

}

// manage all burger food 
$shwfood=$this->selectjoin('tbl_addfood','tbl_addburgercategory','tbl_addfood.category_id=tbl_addburgercategory.category_id');

// create a logic for logout as admin
if(isset($_GET["logout-here"]))
{
$chk=$this->logout();
echo "<script>
alert('You are Logout  as Admin Successfully')
window.location='./';
</script>";
}

// edit food category in admin
if(isset($_GET["editcatid"]))
{
    $edid=$_GET["editcatid"];
    $edcat=$this->editalldata('tbl_addburgercategory','category_id',$edid);
}

// update category food
if(isset($_POST["update-category"]))
{
 $edid=$_GET["editcatid"];
 $where=array("category_id",$edid);
 $catnm=$_POST["categoryname"];
 $date=$_POST["added_date"];
 $data=array("categoryname"=>$catnm,"added_date"=>$date);
 $chk=$this->upddata('tbl_addburgercategory',$data,$where,'category_id',$edid);
 if($chk)
{
echo "<script>
alert('Your Food category successfully updated')
window.location='./manageburger-category';
</script>";
}



}


// logic for change password of admin
if(isset($_POST["change-pass"]))
{
    $id=$_SESSION["admin_id"];
    $opass=$_POST["opass"];
    $npass=$_POST["npass"];
    $cpass=$_POST["cpass"];
    $chk=$this->changepasssword('tbl_admin','password',$opass,$npass,$cpass,'admin_id',$id);

    if($chk)
    {
        unset($_SESSION["admin_id"]);
        unset($_SESSION["email"]);
        session_destroy();
        echo "<script>
        alert('Your password successfully changed')
        window.location='./';
        </script>";
    }
    else 
    {
        echo "<script>
        alert('Your opass,npass and change password is not matched')
        window.location='change-password';
        </script>";
    }
}


//load a view index content
if(isset($_SERVER["PATH_INFO"]))
{
switch($_SERVER["PATH_INFO"])
{
case '/':
require_once("index.php");
require_once("login.php");
break;

case '/dashboard':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("dashboard.php");
require_once("footer.php");
break;
case '/change-password':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("changepassword.php");
require_once("footer.php");
break;
case '/addburger-category':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("addburger_category.php");
require_once("footer.php");

break;

case '/manageburger-category':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("manageburger_category.php");
require_once("footer.php");
break;

case '/editcategory':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("editcategory.php");
require_once("footer.php");
break;
    

case '/addburger-food':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("addburger_food.php");
require_once("footer.php");

break;
case '/manageburger-food':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("manageburger_food.php");
require_once("footer.php");

break;
case '/register':
require_once("index.php");
require_once("header.php");
require_once("navbar.php");
require_once("register.php");
require_once("footer.php");
require_once("login.php");
break;
default :
require_once("index.php");
require_once("header.php");
require_once("404.php");
require_once("footer.php");
require_once("login.php");
break; 

}
}  
}

}
$obj=new admincontroller;
?>
