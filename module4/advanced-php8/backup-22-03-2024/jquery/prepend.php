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
            $("#btn").css({"width":"200px","height":"auto","padding":"10px","border":"none","background-color":"red","color":"white","margin-left":"15%"});
            
             // class selector
             $(".content").css({"width":"50%","height":"auto","margin":"auto","padding":"30px","border":"none","background-color":"white","color":"black"});
            
            
            $("#btn").click(function(){
           
              $("b").prepend("<b>Brijesh &nbsp;</b>");
                 
            })
        })
    </script>

    <div class="content">
    <center>
    <b id="result">Ravindra bhai Pandey</b>
    </center>
    <br>
    <button id="btn">Prepend surname!</button>
    
    </div>

</body>
</html>