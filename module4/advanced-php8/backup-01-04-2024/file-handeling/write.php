<?php 
$file=fopen("ajax.txt","w") or die('File is not exist');
if($file)
{
    echo "file opened successfully";
}
else 
{
    echo "something went wrong";
}

?>