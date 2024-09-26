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
            document.getElementById("content").style="width:50%;height:300px;margin:auto;margin-top:5%; background-color:blue; color:white; padding:20px";
        }
    </script>

</head>
<body onload="display()">
    
    <div id="content"></div>

</body>
</html>