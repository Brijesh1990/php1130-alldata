<nav class="nav navbar navbar-md-expand bg-dark text-white">
<a href="" class="navbar-brand ms-5">50% of on selected Items</a>    
<ul>
    
<li><a href="<?php echo $mainurl;?>">Home</a></li>
<!-- fetch category added by admin -->
<?php
foreach($shwcat as $shwcat1)
{ 
?>
<li><a href="<?php echo $mainurl;?>allfoods?detailsfoodid=<?php echo base64_encode($shwcat1["category_id"]);?>"><?php echo ucfirst($shwcat1["categoryname"]);?></a></li>
<?php 
}
?>
<li><a href="<?php echo $mainurl;?>feedback-us">Feedback</a></li>
<?php 
if(!isset($_SESSION["customer_id"]))
{
?>
<li class="ms-2"><a href="#"><span class="bi bi-cart fs-5"><span class="badge badge-sm bg-danger fs-0">0</span></span></a>
</li>
<?php 
}
else 
{
?>
<li class="ms-2"><a href="<?php echo $mainurl;?>viewcart"><span class="bi bi-cart fs-5"><span class="badge badge-sm bg-danger fs-0"><?php echo $totalcount[0]["total"];?></span></span></a>
</li>
<?php 
}
?>    
</ul>
</nav>