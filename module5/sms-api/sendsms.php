<?php

if(isset($_POST["send_otp"]))
{
require('textlocal.class.php');
require("credentials.php");
$textlocal = new Textlocal(false, false, API_KEY);
$numbers = array($_POST['mobile']);
$sender = 'TXTLCL';
$otp=mt_rand(10000,99999);
$message = 'Hey your 5 digit of security Code is :'.$otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    //print_r($result);
    echo "<h3 style='color:green'>Your OTP successfully send please check your mobile numbers :</h3>"; 
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
}
?>

<form method="post">
    Enter Numbers :<input type="text" name="mobile" placeholder="Enter your mobile" required />
    <br><br>
    <input type="submit" name="send_otp" value="SendOtp">
</form>