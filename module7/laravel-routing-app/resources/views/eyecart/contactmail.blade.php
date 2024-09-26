<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Email send templates</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .send-email 
        {
            width:90% !important;
            height: auto;
            margin: auto;
            background-color:white !important;
            color: black;
            padding: 35px;
        }
    </style>
</head>
<body>

    <div class="send-email">
        <h2>Hey Its a customers contact us form details</h2>
        <img src="https://classroomclipart.com/image/content7/51045/thumb.gif" alt="photo" />
        <p><b>Customers Name :</b>{{$data->name}}</p>
        <p><b>Customers Email :</b>{{$data->email}}</p>
        <p><b>Customers Subject :</b>{{$data->subject}}</p>
        <p><b>Customers Phone :</b>{{$data->phone}}</p>
        <p><b>Customers Message :</b>{{$data->message}}</p>

    </div>
    
</body>
</html>