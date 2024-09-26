<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
    function test()
    {
        if(confirm('Are you sure to Delete data ?'))
        {
            alert('Thanks data will be deleted')
            window.location='http://www.onlineportfolio.byethost14.com';
        }
        else 
        {
            window.location='confirm.php';
        }
    }
    </script>
</head>
<body>
   <button type="button" onclick="test()">Click for delete ?</button>
</body>
</html>