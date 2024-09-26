<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- bvalidator jquery files -->
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#frm1").bValidator();
    })
</script>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Add Burger Food</h1>

<div class="card mb-4 mt-4 col-md-8">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Add Burger Food
</div>
<div class="card-body">
<form method="post" id="frm1" enctype="multipart/form-data">

<div class="form-group mt-3">
<label class="text-success">Select Burger CategoryName </label>
<select  name="categoryname" placeholder="Burger Category"  class="form-control mt-2" data-bvalidator="required">
<option value="">-select Burger Category-</option>
<?php  
foreach($cat as $cat1)
{
?>
<option value="<?php echo $cat1["category_id"];?>"><?php echo  $cat1["categoryname"];?></option>    
<?php 
}
?>
</select>
</div>
<div class="form-group mt-3">
<label class="text-success">Enter Burger Food Name </label>
<input type="text" name="burgername" placeholder="Burger Category" data-bvalidator="required,alpha"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">select Burger Photo </label>
<input type="file"  name="photo" placeholder="Burger Photo"  class="form-control mt-2" data-bvalidator="required">
</div>
<div class="form-group mt-3">
<label class="text-success">select qty </label>
<input type="number" value="1" min="1" max="100" name="qty" placeholder="Burger Category"  class="form-control mt-2" data-bvalidator="required">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter Old Price </label>
<input type="text"  name="old-price" data-bvalidator="required" placeholder="Burger Old Price"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter New Price </label>
<input type="text"  name="new-price" placeholder="Burger New Price" data-bvalidator="required"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter Burger Details </label>
<textarea type="text"  name="details" placeholder="Burger Burger Details"  class="form-control mt-2" data-bvalidator="required"></textarea>    
</div>

<div class="form-group mt-3">
<label class="text-success">Added Date </label>
<input type="date" name="added_date" data-bvalidator="required" placeholder="Added Date"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<input type="submit" name="add-food" class="btn btn-dark text-white mt-2" value="Add Food">
<input type="reset" name="reset"  class="btn btn-danger text-white mt-2" value="Reset"> 
</div>
</form>
</div>
</div>
</div>

</div>
</div>