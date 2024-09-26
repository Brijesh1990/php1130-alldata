<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Manage All Burger Food</h1>

<div class="card mb-4 mt-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Manage All burger Food
</div>
<div class="card-body">
<table id="datatablesSimple">
<thead>
<tr>
<th>#</th>
<th>CategoryName</th>
<th>Burger Name</th>
<th>Photo</th>
<th>qty</th>
<th>Price</th>
<th>OfferPrice</th>
<th>Descriptions</th>
<th>Added Date</th>
<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>#</th>
<th>CategoryName</th>
<th>Burger Name</th>
<th>Photo</th>
<th>qty</th>
<th>Price</th>
<th>OfferPrice</th>
<th>Descriptions</th>
<th>Added Date</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>
<?php 
foreach($shwfood as $row)
{
?>
<tr>
<td><?php echo $row["food_id"];?></td>
<td><?php echo $row["categoryname"];?></td>
<td><?php echo $row["foodname"];?></td>
<td><img src="<?php echo $row["photo"];?>" class="img-fluid w-25"></td>
<td><?php echo $row["qty"];?></td>
<td><?php echo $row["oldprice"];?></td>
<td><?php echo $row["newprice"];?></td>
<td><?php echo $row["descriptions"];?></td>
<td><?php echo $row["addeddate"];?></td>
<td>
<div style="min-width:100px">
<a href=""><span class="fa fa-trash btn btn-danger bg-danger text-white"></span></a> | <a href=""><span class="fa fa-edit btn btn-primary bg-primary text-white"></span></a></td>
</div>
</tr>
<?php 
}
?>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>