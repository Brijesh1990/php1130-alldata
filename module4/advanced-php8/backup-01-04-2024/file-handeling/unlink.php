<?php 
$file="session.txt";
unlink($file);
if($file)
{
    echo "file removed from folders";
}

else 
{
    echo "something went wrong";
}

?>