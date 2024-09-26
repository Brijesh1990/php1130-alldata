<?php 
/* nested if : nested if is used to check condition within another conditions i.e called nested if 

    if(condition)
    {
        if(condition)
        {
      statements;
        }
    }
    else 
    {
        statements;
    }


*/
$a=80;
$b=50;

if($a>$b)
{
    if($a!=0 && $b!=0)
    {
        echo "a is greater than b and both are positive numbers";
    }
}
else 
{
    echo "a is less than b";
}


?>