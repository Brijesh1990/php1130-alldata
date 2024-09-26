<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function display()
        {
            document.getElementById("content").style="width:50%;height:auto;margin:auto;margin-top:5%; background-color:blue; color:white; padding:10px";

            var nm=document.getElementById("name").value;
            document.getElementById("demo").innerHTML="My name is :"+nm;
        }
    </script>

</head>
<body>
    
    <div id="content">
        <p id="demo"></p>
        <form>
            <input type="text" id="name" placeholder="Enter your Name *">
            <br><br>
            <button type="button" onclick="display()">Name Check >></button>
        </form>
    </div>

</body>
</html>