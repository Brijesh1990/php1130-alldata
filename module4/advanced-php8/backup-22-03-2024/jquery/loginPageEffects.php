<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <style>
     .content
     {
        width: 50%;
        height: auto;
        margin: auto;
        padding: 20px;
        display: none !important;
     }
    </style>
   
</head>
<body>
     <!-- offline cdn of jquery -->
     <script src='js/jquery.min.js'></script>
    <script>
        $(document).ready(function(){


            // element selector
            $("body").css({"background-color":"lightgray"});
            // id selector
            $("#btn1").css({"width":"120px","height":"auto","padding":"10px","border":"none","background-color":"red","color":"white","margin-left":"25%"});
            
            
            $("#btn2").css({"width":"120px","height":"auto","padding":"10px","border":"none","background-color":"red","color":"white","margin-left":"15%"});
            
            
            
           
            
            
            $("#btn1").click(function(){
           
              $(".content").slideUp(3000);
                 
            })
            $("#btn2").click(function(){
           
           $(".content form").slideToggle(3000);
              
         })

       
        })
    </script>

    <div class="content">
    <center>
    
     <form>
       <input type="text" placeholder="email" >
       <br><br>
       <input type="password" placeholder="password" >
       <br><br>

       <input type="submit" value="Login" placeholder="email" >
       


     </form>

    
    </center>
   
    </div>

    <br>
    <button id="btn1">ShowLogin</button>
    <button id="btn2">ToggleLogin</button>

</body>
</html>