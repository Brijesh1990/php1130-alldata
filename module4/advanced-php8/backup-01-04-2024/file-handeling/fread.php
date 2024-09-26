<?php 
$file=fopen("ajax.txt","r") or die('file does not exist');
// echo $file;

echo fread($file,500);
?>