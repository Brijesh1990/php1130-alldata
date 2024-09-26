<?php 
$file=fopen("ajax.txt","r") or die('File is not exist');
if($file)
{
    echo "file opened successfully";
}
else 
{
    echo "something went wrong";
}

?>