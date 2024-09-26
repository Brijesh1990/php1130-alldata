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
    // isset() is a variables handeling function that can be used to set variables on server if its set get the name otherwise return null values
     if(isset($_POST["sub"]))
     {
        $nm=$_POST["txt_name"];
        echo "<h3 align='center' style='color:green'>My name is :$nm</h3>";
     }

    ?>
    <form method="post">
        Enter Name :<input type="text" name="txt_name" placeholder="Enter Name *">
        <br><br>
        <input type="submit" name="sub" value="Submit">

    </form>
</body>
</html>