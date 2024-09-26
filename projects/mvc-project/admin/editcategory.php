<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- bvalidator jquery files -->
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#frm").bValidator();
    })
</script>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Edit Burger Category</h1>

<div class="card mb-4 mt-4 col-md-8">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Edit Burger Category
</div>
<div class="card-body">
<form method="post" id="frm">
<div class="form-group mt-3">
    <label class="text-success">Edit Burger CategoryName </label>
    <input type="text" name="categoryname" value="<?php echo $edcat[0]["categoryname"];?>" placeholder="Burger Category" data-bvalidator="required" class="form-control mt-2">
</div>

<div class="form-group mt-3">
    <label class="text-success">Edit Added Date </label>
    <input type="date"  value="<?php echo $edcat[0]["added_date"];?>" name="added_date" placeholder="Added Date" data-bvalidator="required"  class="form-control mt-2">
</div>


<div class="form-group mt-3">
  
    <input type="submit" name="update-category" class="btn btn-dark text-white mt-2" value="Update Category">

    
    <input type="reset" name="reset"  class="btn btn-danger text-white mt-2" value="Reset"> 
</div>

</form>


</div>
</div>
</div>

</div>
</div>