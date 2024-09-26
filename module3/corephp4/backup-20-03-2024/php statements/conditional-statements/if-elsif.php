<?php 
/* if elseif : if is executed if condition is true elseif executed to check multiple times true conditions if elseif is false else is executed
   
    if(condition)
    {
        statements;
    }
    elseif(condition)
    {
        statements
    }
    elseif(condition)
    {
        statements;
    }
    else 
    {
        statements;
    }

*/

$a=50;
$b=50;
if($a>$b)
{
    echo "a is greater than b";
}
elseif($b>$a)
{
    echo "b is greater than a";
}
else 
{
    echo "a and b both are equal";
}

?>