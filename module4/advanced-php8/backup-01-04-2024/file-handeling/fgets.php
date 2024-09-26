<?php 
$file=fopen("ajax.txt","r") or die('file does not exist');
// echo $file;
echo fgets($file,500);
?>