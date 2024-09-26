<div class="container p-5 mt-2">
<h3>View Your Cart <button type="button" class="btn btn-dark position-relative">
<span class="bi bi-cart"></span>
<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $totalcount[0]["total"];?></span>
</button></h3>
<table class="table table-responsive">
<tr>
<th>#id</th>
<th>Photo</th>
<th>FoodName</th>
<th>Price</th>
<th>qty</th>
<th>Total</th>
<th>AddedDate</th>
<th>Action</th>
</tr>
<?php 
foreach( $shwcart as $row)
{
?>
<tr>
<td><?php echo $row["cart_id"];?></td>
<td><img src="admin/<?php echo $row['photo'];?>" style="width:150px; height:150px"></td>
<td><?php echo $row["foodname"];?></td>
<td><?php echo $row["price"];?></td>
<td><?php echo $row["quantity"];?></td>
<td><?php echo $row["subtotal"];?></td>
<td><?php echo $row["addeddate"];?></td>
<td><a href="<?php echo $mainurl;?>?deletecartid=<?php echo $row['cart_id'];?>" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure to Delete cart')"><span class="bi bi-trash text-white"></span></a></td> 
</tr>
<?php 
}
?>
<tr>
<td colspan="8" align="right">
<h2 class="bg-dark text-white p-3 w-50" >Subtotal of Products Rs.<?php echo $subtotal[0]["total"];?></h2>
</td>
</tr>


<tr>
<td colspan="8">
<a href="<?php echo $mainurl;?>checkout-here"><button type="button" class="btn btn-sm w-50 p-3 fs-4 float-end btn-dark btn-white">Checkout Here</button></a>
</td>
</tr>

</table>


</div>