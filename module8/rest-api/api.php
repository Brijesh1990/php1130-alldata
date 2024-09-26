<?php 
// header("Content-Type:application/json");
error_reporting(0);
header("Content-Type:application/json");
if(isset($_GET["order_id"]) && $_GET["order_id"]!="")
{
    include("config.php");
    $order_id=$_GET['order_id'];
    //fetch all order status in json formate 
    // echo $result=mysqli_query($con,"select * from `tbl_api` where order_id=`$order_id`");exit();
     $result=mysqli_query($con,"select * from tbl_api where order_id=$order_id");

    if(mysqli_num_rows($result)>0) 
    {
        $row=mysqli_fetch_array($result);
        $ammount=$row["ammount"];
        $response_code=$row["response_code"];
        $response_desc=$row["response_desc"];
        response($order_id,$ammount,$response_code,$response_desc);
        mysqli_close($con);

        //success{"order_id":"1545454","ammount":"250","response_code":"200","response_desc":"yes got products details"}

    }
    else 
    {
        response(NULL,NULL,200,"No Record Found");
    }
}
else 

{
    response(NULL,NULL,400,'Invalid Request');
}


// create a function for get response of api

function response($order_id,$ammount,$response_code,$response_desc)
{
    $response["order_id"]=$order_id;
    $response["ammount"]=$ammount;
    $response["response_code"]=$response_code;
    $response["response_desc"]=$response_desc;
    //print_r($response);
    // get all data in json formate
    $json_encode=json_encode($response);
    echo $json_encode;
    

}

?>