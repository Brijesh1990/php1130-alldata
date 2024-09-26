<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   
</head>
<body>
     <!-- offline cdn of jquery -->
     <script src='js/jquery.min.js'></script>
    <script>
        $(document).ready(function(){


            // element selector
            $("body").css({"background-color":"lightgray"});
            // id selector
            $("#btn1").css({"width":"80px","height":"auto","padding":"10px","border":"none","background-color":"red","color":"white","margin-left":"5%"});
            
            
            $("#btn2").css({"width":"80px","height":"auto","padding":"10px","border":"none","background-color":"red","color":"white","margin-left":"5%"});
            
            
            $("#btn3").css({"width":"80px","height":"auto","padding":"10px","border":"none","background-color":"red","color":"white","margin-left":"5%"});
            
             // class selector
             $(".content").css({"width":"50%","height":"auto","margin":"auto","padding":"30px","border":"none","background-color":"white","color":"black"});
            
            
            $("#btn1").click(function(){
           
              $("#result").slideUp(3000);
                 
            })
            $("#btn2").click(function(){
           
           $("#result").slideDown(3000);
              
         })

         $("#btn3").click(function(){
           
           $("#result").slideToggle(3000);
              
         })
        })
    </script>

    <div class="content">
    <center>
    <p id="result"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt non recusandae voluptatem est quos quas esse animi enim aliquid, ratione exercitationem culpa laboriosam placeat maxime temporibus sapiente, sequi commodi quo!</p>
    </center>
    <br>
    <button id="btn1">Hide</button>
    <button id="btn2">Show</button>
    <button id="btn3">Toggle</button>
    </div>

</body>
</html>