<?php 
// array defined by another array multidimentional array
$arr=array("technical"=>array("php","asp.net","java","react js"),"non-technical"=>array("wd","st","dm","gd"));
print_r($arr);
print_r($arr["technical"][3]);

?>