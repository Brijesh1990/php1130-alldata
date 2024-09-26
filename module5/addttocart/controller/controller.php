<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();

        // add products here
        if(isset($_POST["addproduct"]))
        {
            // file upload 
            $tmp_name=$_FILES["img"]["tmp_name"];
            $path="uploads/products/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $pnm=$_POST["pname"];
            $price=$_POST["price"];
            $qty=$_POST["qty"];
            $desc=$_POST["desc"];
            $data=array("photo"=>$path,"productname"=>$pnm,"price"=>$price,"qty"=>$qty,"descriptions"=>$desc);  
            $chk=$this->insertalldata('tbl_addproducts',$data);
            if($chk)
            {
                echo "<script>
                alert('Your products added successfully')
                window.location='./';
                </script>";
            }
             
        }

        // display products 
        $shwprod=$this->selectalldata('tbl_addproducts');

        // add products in cart
        if(isset($_POST["addtocart"]))
        {
            // file upload 
           
            $path=$_POST["img"];
            $pnm=$_POST["pname"];
            $price=$_POST["price"];
            $qty=$_POST["qty"];
            $data=array("photo"=>$path,"productname"=>$pnm,"price"=>$price,"qty"=>$qty);  
            $chk=$this->insertalldata('tbl_cart',$data);
            if($chk)
            {
                echo "<script>
                alert('Your products added successfully in Cart')
                window.location='./view-cart';
                </script>";
            }
             
        }

        // total cart count 
        $totalcrt=$this->totalcount('tbl_cart','cartid');

        // view  cart
        $shwcart=$this->selectalldata('tbl_cart');

        // load your view here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/': 
                   require_once("index.php");
                   require_once("navbar.php");
                   require_once("content.php");
                   require_once("addproduct.php");           
                   break;
                case '/view-cart': 
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("viewcart.php");
                    break;

                default:
                require_once("index.php");
                require_once("navbar.php");
                require_once("404.php");
                break;

                     
            }
        }
    }
}
$obj=new controller;
?>