<?php 
// find the columns of array values
$arr=array(
    array(
        "id"=>100,
        "name"=>"brijesh",
        "age"=>"34"
    ),
    array(
        "id"=>101,
        "name"=>"darshan",
        "age"=>"24"
    ),

    array(
        "id"=>102,
        "name"=>"priyam",
        "age"=>"24"
    )
);
print_r(array_column($arr,"name"));
?>