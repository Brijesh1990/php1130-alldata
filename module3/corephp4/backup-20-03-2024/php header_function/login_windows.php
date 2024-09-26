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
      echo "<script>
      alert('You are Logged in successfully')
      window.location='welcome.php';
      </script>";
    }
    else 
    {
       
      echo "<script>
      alert('Your email & Password are incorrect try again')
      window.location='login_windows.php';
      </script>";
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