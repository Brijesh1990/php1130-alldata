<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   <script src="js/validations.js"></script>
</head>
<body>
    
<center>
    <div id="content">
        <p id="demo"></p>
        <form action='welcome.php' id="frm" name="frm" onsubmit="return valid(this.value)">
            <input type="text" id="fname" name="fname" placeholder="Enter your FirstName *">
            <br><br>
            <input type="text" id="lname" name="lname" placeholder="Enter your LastName *">
            <br><br>
            <input type="text" id="email" name="email" placeholder="Enter your Email *">
            <br><br>
            <button type="submit" onclick="display()">Name Check >></button>
        </form>
    </div>

</body>
</html>