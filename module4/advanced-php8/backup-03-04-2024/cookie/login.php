<?php 
error_reporting(0);
session_start();
if(isset($_POST["log"]))
{
    $em=$_POST["email"];
    $pwd=$_POST["password"];
    if($em=='bkpandey@gmail.com' && $pwd=='b123456')
    {
        if(!empty($_POST["remember"]))
        {
        setcookie("email",$_POST["email"],time()+(60*60*24));
        setcookie("password",$_POST["password"],time()+(60*60*24)); 

        $_SESSION["id"]=$_POST["id"];
        $_SESSION["email"]=$_POST["email"];
        echo "<div class='alert alert-success text-dark w-50 mx-auto'>You are successfully Logged In</div>";
        header("refresh:3,welcome.php");
    }
}
    else 
    {
        echo "<div class='alert alert-danger text-dark w-50 mx-auto'>Your email and password are incorrect</div>";
        header("refresh:3,login.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    

</head>
<body>

    <div class="conatiner mt-5 shadow p-4 w-50 mx-auto">
        <h1>Login Form</h1>
        <form method="post">
        <div class="form-group mt-4">
            <input type="text" name="email" placeholder="Email *" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" class="form-control">
        </div>
        
        <div class="form-group mt-4">
            <input type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" placeholder="Password *" class="form-control">
        </div>
        
        <div class="form-group mt-4">
            <b>Remember me :<input type="checkbox" name="remember" <?php if(isset($_COOKIE["email"])) { ?> checked <?php  } ?>></b>
            <br><br>
            <input type="submit" name="log" value="SignIn"  class="btn  btn-lg btn-dark text-white">
        </div>
</form>
    </div>
    
</body>
</html>