<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- http://localhost/php-1130mwf/module5/web-services/what%20is%20webservices/countrylist.json-->
    <div class="container p-5 mt-5 w-50 mx-auto shadow">
        <h3>Json web services</h3>
        <form method="post">
            <div class="form-group">
                select country :<select name="country" class="form-control">
                     
                    <option value="">-select country-</option>
                    <?php 
                    $url="http://localhost/php-1130mwf/module5/web-services/what%20is%20webservices/countrylist.json";
                    $data=file_get_contents($url,true);
                    $file=json_decode($data,true);
                    foreach($file as $row)
                    { 

                     ?>
                    <option value="<?php echo $row;?>"><?php echo $row;?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
        </form>

    </div>
</body>
</html>