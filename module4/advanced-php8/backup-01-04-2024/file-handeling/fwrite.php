<?php 
$file=fopen("javascript.txt","w") or die('file does not exist');
$txt="javascript is a client side scripting language";
echo fwrite($file,$txt);
fclose($file);
?>