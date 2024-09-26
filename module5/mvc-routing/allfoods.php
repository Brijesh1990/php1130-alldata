<div class="container-fluid p-5 mt-5">
    <h3>Hurry up 50% of on Online Ordering Food</h3>
    <div class="row mt-5">
        
        <div class="col-md-4 shadow p-4">

            <ul class="sidebar-link">
                <li><a href="">Order Food</a></li>
                <li><a href="">Manage Food</a></li>
                <li><a href="">Manage Notifications</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Reviews Us</a></li>
              
            </ul>
            <div class="col-md-12 mt-3">
                <p class="bg-dark text-white p-3">OfferZone</p>
                <p class="text-center"><img src="<?php echo $baseurl;?>/images/food3.jpg" class="img-fluid" style="width:200px; height:220px"></p>
                <p class="text-center h4">Hot Dog Burger</p>
                <p class="text-center h5"><del>Rs.85</del>&nbsp; Rs.65</p>
                <p class="text-center"><button type="button" class="btn btn-dark text-white ord">Order Now <span class="bi bi-truck"></span></button></p>
                
            </div>
        </div>
        <div class="col-md-7 ms-5 shadow p-4">
            <div class="row">
               <?php 
                foreach($shwfood as  $row)
                {
               ?>
                <div class="col-md-6">
                    <p class="text-center"><img src="admin/<?php echo  $row["photo"];?>" class="img-fluid" style="width:200px; height:220px"></p>
                    <p class="text-center h4"><?php echo  $row["foodname"];?></p>
                    <p class="text-center h5"><del>Rs.<?php echo  $row["oldprice"];?></del>&nbsp; Rs.<?php echo  $row["newprice"];?></p>
                    <p class="text-center"><a href="<?php echo $mainurl;?>foodsdetails?fooddetails=<?php echo base64_encode($row["food_id"]);?>"><button type="button" class="btn btn-dark text-white ord">click for details <span class="bi bi-truck"></span></button></a></p>
                    
                </div>

                <?php 
                }
                ?>
         
            </div>
        </div>
    </div>
</div>