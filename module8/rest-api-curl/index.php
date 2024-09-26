<?php 
if(isset($_POST["sub"]) && $_POST["order_id"]!="")
{
    include("config.php");
    $order_id=$_POST['order_id'];
    //echo $result;
    $query=mysqli_query($con,"select * from tbl_api where order_id=$order_id");
    if(mysqli_num_rows($query)>0) 
    {
        $row=mysqli_fetch_array($query);
        $ammount=$row["ammount"];
        $response_code=$row["response_code"];
        $response_desc=$row["response_desc"];
        response($order_id,$ammount,$response_code,$response_desc);
        // consume api using CURL ....
        $url="http://localhost/php-1130mwf/module8/rest-api-curl/".$order_id;
        $client=curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response=curl_exec($client);
        $result=json_decode($response);
      

        echo "<table align='center' border='1'>";
        echo "<tr><td> Order Id :".$row["order_id"]."</td></tr>";
        echo "<tr><td> Order Id :".$row["ammount"]."</td></tr>";
        echo "<tr><td> Order Id :".$row["response_code"]."</td></tr>";
        echo "<tr><td> Order Id :".$row["response_desc"]."</td></tr>";
        echo "</table>";
        mysqli_close($con);


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


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<center>
    <form method="post">
     Enter Order Id : <input type="text" name="order_id" placeholder="Enter your Order Id *" required />
     <br><br>
     <input type="submit" name="sub" value="Get Response Api">
    </form>  
</center>
</body>
</html>
