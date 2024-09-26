<div class="container-fluid p-5 mt-5">
<h3>Hurry up 50% of on Online Ordering Food</h3>
<div class="row mt-5">
<div class="col-md-4 shadow p-4 h-100">
<ul class="sidebar-link">
<li><a href="">Manage Profile <span class="bi bi-person"></a></li>
<li><a href="">Manage Notification <span class="bi bi-person"></a></li>
<li><a href="">Manage Orders <span class="bi bi-person"></a></li>
<li><a href="">Delete Account <span class="bi bi-person"></a></li>
<li><a href="">Change Password <span class="bi bi-person"></a></li>
<li><a href="" class="btn btn-danger btn-sm text-white">Logout <span class="bi bi-power"></a></li>

</ul>
<div class="col-md-12 mt-3">
<p class="bg-dark text-white p-3">OfferZone</p>
<p class="text-center"><img src="<?php echo $baseurl;?>/images/food3.jpg" class="img-fluid" style="width:200px; height:220px"></p>
<p class="text-center h4">Hot Dog Burger</p>
<p class="text-center h5"><del>Rs.85</del>&nbsp; Rs.65</p>
<p class="text-center"><button type="button" class="btn btn-dark text-white ord">Order Now <span class="bi bi-truck"></span></button></p>

</div>
</div>
<div class="col-md-7 ms-5 shadow p-4" style="height:auto !important">
<h3>Update Profile here</h3>
<form method="post">
<div class="input-group mt-3">
<input type="text" name="name" value="<?php echo $mangeprof[0]["name"];?>" placeholder="Name *"  required class="form-control">
</div>
<div class="input-group mt-3">
<input type="text" name="email" placeholder="Email *" value="<?php echo $mangeprof[0]["email"];?>"  required class="form-control">
</div>

<div class="input-group mt-3">
<input type="text" name="mobile" value="<?php echo $mangeprof[0]["mobile"];?>" placeholder="Mobile *"  required class="form-control">
</div>


<div class="input-group mt-3">
<textarea  name="address" placeholder="Manage Address *"   required class="form-control"><?php echo $mangeprof[0]["address"];?></textarea>
</div>


<div class="input-group mt-3">
<select  name="country" placeholder="Manage Address *"  required class="form-control">
    <option value="">-select country-</option>
    <?php
    foreach($country as $country1)
    { 
    ?>
    <option value="<?php echo $country1["country_id"];?>"><?php echo $country1["countryname"];?></option>
    <?php 
    }
    ?>
</select>
</div>


<div class="input-group mt-3">
<select  name="state" placeholder="Manage Address *"  required class="form-control">
    <option value="">-select state-</option>
    <?php
    foreach($state as $state1)
    { 
    ?>
    <option value="<?php echo $state1["state_id"];?>"><?php echo $state1["statename"];?></option>
    <?php 
    }
    ?>
</select>
</div>


<div class="input-group mt-3">
<select  name="city" placeholder="Manage Address *"  required class="form-control">
    <option value="">-select city-</option>
    <?php
    foreach($city as $city1)
    { 
    ?>
    <option value="<?php echo $city1["city_id"];?>"><?php echo $city1["cityname"];?></option>
    <?php 
    }
    ?>
</select>
</div>
<div class="input-group mt-3">
<input type="submit" name="upd" value="Update Profile" class="btn btn-md btn-dark text-white">
<input type="reset" name="reset" value="Reset" class="btn btn-md btn-danger ms-4 text-white">

</div>



</form>


</div>
</div>
</div>