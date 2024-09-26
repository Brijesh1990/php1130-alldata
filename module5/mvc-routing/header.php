<?php 
$mainurl="http://localhost/php-1130mwf/module5/mvc-routing/";
$baseurl="http://localhost/php-1130mwf/module5/mvc-routing/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Food Ordering App</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?php echo $baseurl;?>css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<!-- header -->
<div class="container-fluid p-5 shadow">
<div class="row">
<div class="col-md-2 ms-2"><h2 class="logo"><img src="<?php echo $baseurl;?>images/logo.png" class="img-fluid w-25"></h2></div>

<div class="col-md-5 ms-0">
<div class="input-group">
<input type="search" name="search" placeholder="search product categories wise ....." class="form-control">
<button type="button" class="btn btn-sm btn-primary text-white"><span class="bi bi-search"></span></button>
</div>
</div>
<div class="col-md-4 ms-0 fs-4">
<?php
if(!isset($_SESSION["customer_id"]))
{
?>     
<button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn ms-2 btn-md btn-dark text-white">Account <span class="bi bi-person"></span></button>
<?php 
}
else 
{
?>

<button type="button" class="btn ms-2 btn-md btn-dark text-white">
<ul class="nav-links">
<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="">Welcome:<?php echo ucfirst($_SESSION["name"]);?> <span class="bi bi-person"></span></a>
<ul class="dropdown-menu bg-dark p-4 mt-1" style="min-width:220px !important">
<li><a href="<?php echo $mainurl;?>manage-profile">Manage Profile <span class="bi bi-person"></a></li>
<li><a href="">Manage Notification <span class="bi bi-person"></a></li>
<li><a href="">Manage Orders <span class="bi bi-person"></a></li>
<li><a href="">Delete Account <span class="bi bi-person"></a></li>
<li><a href="">Change Password <span class="bi bi-person"></a></li>
<li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-danger btn-sm text-white">Logout <span class="bi bi-power"></a></li>
</ul>
</li>
</ul>   

</button>

<?php 
}
?>
<span class="bi bi-facebook ms-5"></span>
<span class="bi bi-twitter"></span>
<span class="bi bi-instagram"></span>
<span class="bi bi-whatsapp"></span>

</div>
</div>
</div>




</body>
</html>