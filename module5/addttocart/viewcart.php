<div class="container p-5 mt-5">
<h2 class=""><a class="nav-link" href="<?php echo $mainurl;?>view-cart">ViewCart <span class="bi bi-cart"><span class="badge badge-sm bg-danger"><?php echo $totalcrt[0]["total"];?></span></span></a></h2>
<hr class="border border-dark w-25">

<table class="table table-responsive">
<tr>
<th>#</th>
<th>Photo</th>
<th>Pname</th>
<th>Price</th>
<th>Qty</th>
<th>Action</th>
</tr>
<?php
// $count=0; 
$count=1; 
foreach($shwcart as $row)
{
// $count=$count+1;
?>
<tr>
<!-- <td><?php echo $row["cartid"];?></td> -->
 <td><?php echo $count;?>
<td><img src="<?php echo $row["photo"];?>" class="img-fluid" style="width:80px; height:80px"></td>
<td><?php echo $row["productname"];?></td>
<td><?php echo $row["price"];?></td>
<td><?php echo $row["qty"];?></td>
<td><a href="<?php echo $row["cartid"];?>"><span class="bi bi-trash text-danger"></span></a></td>
</tr>
<?php 
$count++;
}

?>
</table>


</div>
