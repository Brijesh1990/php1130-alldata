<?php 
$file=fopen("javascript.txt","a") or die('File is not exist');
if($file)
{
    echo "file opened successfully";
}
else 
{
    echo "something went wrong";
}

?>