<?php 
if(isset($_POST["ad"]))
{
    $number=$_POST["number"];
    if($number%2==0)
    {
     echo "<h3 align='center' style='color:green'>Number is even</h3>";
    }
    else 
    {

        echo "<h3 align='center' style='color:red'>Number is odd</h3>";
    }

}
?>