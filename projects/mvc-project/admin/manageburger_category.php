<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Manage All Burger Category</h1>

<div class="card mb-4 mt-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Manage All burger category
</div>
<div class="card-body">
<table id="datatablesSimple">
<thead>
<tr>
<th>#</th>
<th>CategoryName</th>
<th>Added Date</th>
<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
    
<th>#</th>
<th>CategoryName</th>
<th>Added Date</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>
<?php 
foreach($cat as $cat1)
{
?>
<tr>
<td><?php echo $cat1["category_id"];?></td>
<td><?php echo $cat1["categoryname"];?></td>
<td><?php echo $cat1["added_date"];?></td>
<td><a href="<?php echo $mainurl;?>?deletecategory=<?php echo $cat1["category_id"];?>"><span class="fa fa-trash btn btn-danger bg-danger text-white"></span></a> | <a href="<?php echo $mainurl;?>editcategory?editcatid=<?php echo $cat1["category_id"];?>"><span class="fa fa-edit btn btn-primary bg-primary text-white"></span></a></td>
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