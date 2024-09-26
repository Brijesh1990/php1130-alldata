<?php 
// switch(condition)
// {
//     case 1:
//         statements;
//         break;
        
//     case 2:
//         statements;
//         break;
        
//     case 3:
//         statements;
//         break;

//     default:
//     statements;
//     break;    

// }


$grade="k";
echo "Please input grade in A,B,C only"."<br>";
switch($grade)
{
    case 'A':
        echo "I am toppers &#9786";
        break;
    case 'B':
        echo "I am averge  &#9786";
        break;
    case 'C':
        echo "I am failed  &#9785";
        break;

    default:   
    echo "your grade is not found try to connect with admin";
        break;
 
}

?>