<div class="container-fluid p-5 mt-5">
<h3 class="ms-0 h2">Order now your food</h3>
<hr>
<div class="row mt-5">

<div class="col-md-12 ms-0 shadow p-4">
<div class="row">
<?php 
foreach($shwfooddetails as  $row)
{
?>
<div class="col-md-4 p-0">
<form method="post">
<input type="hidden" name="food_id" value="<?php echo  $row["food_id"];?>" readonly style="border:none">        
<p class="text-center"><img src="admin/<?php echo  $row["photo"];?>" class="img-fluid" style="width:100%; height:350px"></p>
</div>

<div class="col-md-8">

<p class="h4 ms-5 mt-2"><?php echo  $row["foodname"];?></p>

<p class="h5 ms-5 mt-4"><del>Rs.<?php echo  $row["oldprice"];?></del>&nbsp; Rs.<input type="text" name="price" id="price" value="<?php echo  $row["newprice"];?>" readonly style="border:none"></p>

<p class="h5 ms-5 mt-4"><input type="number" name="qty" id="qty" class="form-control w-50" value="1" min="1" max="10" onchange="subtotal()"></p>

<p class="h5 ms-5 mt-4 bg-dark p-3 text-white w-50">SubTotal Rs.<label id="total"><?php echo  $row["newprice"];?></label></p>

<p class="ms-5 mt-4">

<button type="button" class="btn btn-success text-white ord">ContinueToAdd</button>
<?php 
if(!isset($_SESSION["customer_id"]))
{
?>
<button type="button" class="btn btn-danger text-white ord ms-5" data-bs-toggle="modal" data-bs-target="#ord">Order Now <span class="bi bi-truck" ></span></button>
<?php
}
else 
{
?>

<input type="submit" class="btn btn-danger text-white ord ms-5" name="addtocart" value="Order Now">
<?php 
}
?>
</p>

</form>

<p class="h4 ms-5 mt-5">Food Details</p>
<p class="ms-5 mt-4"><?php echo  $row["descriptions"];?></p>
<p class="h4 ms-5 mt-5">Give us Reviews</p>
<hr class="ms-5">
</div>
<?php 
}
?>
</div>
</div>
</div>
</div>

<script>
// subtotal of addfoods using js
function subtotal()
{
var p=document.getElementById("price").value;
var q=document.getElementById("qty").value;
var tot=p*q;
document.getElementById("total").innerHTML=tot;
}

</script>