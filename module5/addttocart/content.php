<div class="container p-5 mt-5">
   <h2 class="text-center">50% off on selected items hurry Up</h2>
   <hr class="border border-dark w-25 mx-auto">
   <div class="row">
    <div class="col-md-4 shadow p-4">
        <h2 class="text-center bg-dark text-white p-3">Select Category</h2>
        <ul class="sidebar-link">
            <li><a href="">Mens Items</a></li>
            <li><a href="">Womens Items</a></li>
            <li><a href="">Kids Items</a></li>
            <li><a href="">Electronics Items</a></li>
            <li><a href="">Mobile assesories</a></li>
            <li><a href="">OfferZones</a></li>
        </ul>
    </div>
    <div class="col-md-8 p-4">
        <div class="row">
            <?php 
            foreach($shwprod as $row)
            { 
            ?>
            <div class="col-md-5 ms-5 shadow p-3">
                <form method="post" enctype="multipart/form-data">
                <p class="text-center">
                <input type="hidden" name="img" value="<?php echo $row["photo"];?>" />     
                <img src="<?php echo $row["photo"];?>"  class="img-fluid" style="width:75%; height:220px"></p>
                <p class="text-center fs-3">
                    <input type="hidden" name="pname" value="<?php echo $row["productname"];?>" />         
                    <?php echo $row["productname"];?></p>
                <p class="text-center fs-6">
                    <input type="hidden" name="price" value="<?php echo $row["price"];?>" />     
                    <input type="hidden" name="qty" value="<?php echo $row["qty"];?>" />     
                    Rs.<?php echo $row["price"];?></p>
                <p class="text-center fs-3"><button type="submit" name="addtocart" class="btn btn-sm btn-dark bg-dark text-white">AddToCart</button></p>

                </form>
                
            </div>
            <?php 
            }
            ?>
        </div>
    </div>
   </div> 
</div>
