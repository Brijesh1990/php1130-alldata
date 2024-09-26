<?php 
  require("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jquery main CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     <!-- ajax using jquery CDN -->
    <script>
    function str(val)
    {
        //alert('hi')
        $.ajax({
            
            type:"POST",
            url:"getdata.php",
            data:"cn="+val,
          
            success:function(data)
             {
                $("#st").html(data);
            }

        });
    }

    function str1(val)
    {
        $.ajax({
            
            type:"POST",
            url:"getdata.php",
            data:"st="+val,
            success:function(data)
            {
                $("#ct").html(data);
            }

        });
    }

   </script>
</head>
<body>
    

   <div class="w-50 mx-auto shadow p-5">
    <form method="post">
        <div class="form-group mt-5">
            <input type="text" name="name" placeholder="Name *" class="form-control">
        </div>
        
        <div class="form-group mt-5">
            <input type="text" name="email" placeholder="email *" class="form-control">
        </div>
        
        <div class="form-group mt-5">
            <select  name="country" placeholder="country *" id="cn" onchange="return str(this.value)" class="form-control">
             <option value="">-select country-</option>
             <?php 
           
             $select="select * from tbl_country";
             $exe=mysqli_query($con,$select);
             while($fetch=mysqli_fetch_array($exe))
             {
             ?>
             <option value="<?php echo $fetch["cid"];?>"><?php echo $fetch["cname"];?></option>
             <?php 
             }
             ?>
            </select>
        </div>
        
        <div class="form-group mt-5">
            <select  name="state" placeholder="state *" id="st" onchange="return str1(this.value)" class="form-control">
             <option value="">-select state-</option>
             <option value=""></option>
             
            </select>
        </div>

        <div class="form-group mt-5">
            <select  name="city" placeholder="city *" id="ct" class="form-control">
             <option value="">-select city-</option>
             <option value=""></option>
             
            </select>
        </div>  <div class="form-group mt-5">
            <input type="submit" name="register" value="Register" class="form-control">
        </div>
    </form>

   </div>
    

</body>
</html>