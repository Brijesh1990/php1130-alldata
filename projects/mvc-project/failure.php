<?php
if(isset($_SESSION["customer_id"]))
{
    // echo "<script>
    
    //  window.location='PaymentFailure';
    
    
    // </script>";

?>

<div class="content" style="margin-top: 5%; height:550px; width:90%; margin-left:10%">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="col-md-10 col-xs-12 col-md-offset-1">
<div class="card" style="box-shadow: 0px 0px 10px 2px gray; padding:15px; height: 550px;">
<center>
<div class="card-heading"><h2 style="color:dark">Payment Status </h2></div>
<div class="card-body">
<h2 style="font-size:30px; letter-spacing:2px; color:dark">Your Transactions is Failed Try Again </h2> 
<hr style="border:dark solid 3px; w-50">
<center>
<img src="https://i0.wp.com/nrifuture.com/wp-content/uploads/2022/05/comp_3.gif?fit=800%2C600&ssl=1" style="width: 250px; height: 200px;">
</center>
<?php
$custid=$_SESSION["customer_id"];
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="StCMXYEpZ3";
// Salt should be same Post Request 
If (isset($_POST["additionalCharges"])) {
$additionalCharges=$_POST["additionalCharges"];
$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
} else {
$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
$hash = hash("sha512", $retHashSeq);

if ($hash != $posted_hash) {
echo "Invalid Transaction. Please try again";
} else {
echo "<h3>Your order status is ". $status .".</h3>";
echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
} 
?>


<center>
<a href="<?php echo $mainurl;?>"><button type="button" class="btn btn-block btn-dark text-white p-3" style="margin-left:0%; width: 40%;">Go on HomePage <span class="fa fa-file-o"></span></button></a>
</center>

</div>
</div>
</div>
</div>
</div>
<div>
<div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php
}
?>
