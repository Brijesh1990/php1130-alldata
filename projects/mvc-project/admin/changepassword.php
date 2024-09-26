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
<h1 class="mt-4">Change Your admin Password</h1>

<div class="card mb-4 mt-4 col-md-8">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Change Password
</div>
<div class="card-body">
<form method="post" id="frm">
<div class="form-group mt-3">
<label class="text-success">Enter Old Password </label>
<input type="password" name="opass" placeholder="Old Password" data-bvalidator="required" class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter New Password </label>
<input type="password" name="npass" placeholder="New Password" data-bvalidator="required" class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter Confirmed Password </label>
<input type="password" name="cpass" placeholder="Confirmed Password" data-bvalidator="required" class="form-control mt-2">
</div>


<div class="form-group mt-3">
<input type="submit" name="change-pass" class="btn btn-dark text-white mt-2" value="Submit">

<input type="reset" name="reset"  class="btn btn-danger text-white mt-2" value="Reset"> 
</div>
</form>

</div>
</div>
</div>

</div>
</div>