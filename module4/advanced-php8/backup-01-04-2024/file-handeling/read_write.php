<?php 
$file=fopen("session.txt","r+") or die('File is not exist');
if($file)
{
    echo "file opened successfully";
}
else 
{
    echo "something went wrong";
}

?>