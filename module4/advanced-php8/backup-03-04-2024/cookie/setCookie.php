<?php 
$name="user";
$value="Brijesh";
setcookie($name,$value,time()+(60*60*24));//set for 1 day 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 
if(!empty($_COOKIE[$name]))
{
    echo "The user set".$name."is successfully";
}
else 
{
    echo "Cookie is set".$name."<br>";
    echo $_COOKIE[$name];
}
?>
</body>
</html>