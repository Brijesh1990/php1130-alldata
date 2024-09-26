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
if(isset($_POST["add_login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    if($em=='rahul@gmail.com' && $pass=='r12345')
    {
         echo "<h2 align='center' style='color:green'>You are Logged in successfully</h2>";
         header("refresh:4,welcome.php");
    }
    else 
    {
        echo "<h2 align='center' style='color:red'>Your email and password are incorect try again</h2>";
        header("refresh:4,login_refresh.php");
    }
}


?>
    <center>
        <form method="post">
            Email * :<input type="text" name="email" placeholder="Email *" ><br><br>
            Password * :<input type="password" name="pass" placeholder="Password *" ><br><br>
            <input type="submit" name="add_login" value="Login" ><br><br>
        </form>
    </center>
</body>
</html>