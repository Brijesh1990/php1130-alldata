<?php 
require_once("header.php");
require_once("navbar.php");

?>
   <!-- content start here -->
   <div class="container p-5 mt-5">
      <h1 class="p-3">Create Your Account </h1>
      <hr class="border border-1 border-danger">
      <div class="row">
        <div class="col-md-6 login-sidebar m-0 p-0">
            <div class="text-overlay">
              <ul>
                <li class="p-5"><h2 class="text-white">Why Join with us
                    <hr class="border border-1 border-white"></h2></li>
                <li class="p-0 ms-5"><p class="text-white">Best services in Rajkot Area</p></li>
                <li class="p-0 ms-5"><p class="text-white">24x7 Life support</p></li>
                <li class="p-0 ms-5"><p class="text-white">Return Policy</p></li>
                <li class="p-0 ms-5"><p class="text-white">Terms and Conditions</p></li>
                <li class="p-0 ms-5"><p class="text-white">24x7 Customer care support</p></li>
              </ul>
            </div>
        </div>
        <div class="col-md-6 login-frm p-5">
            <form method="post">
                <div class="form-group mt-3">
                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="password" placeholder="Password *" required class="form-control">
                </div>

                <div class="form-group mt-3">
                    <input type="password" name="cpassword" placeholder="Confirmed Password *" required class="form-control">
                </div>

                <div class="form-group mt-3">
                    <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                </div>

                <div class="form-group mt-3">
                    Male <input type="radio" name="gender"  class="w-0 h-0">
                    Female <input type="radio" name="gender"  class="w-0 h-0">
                
                </div>

                <div class="form-group mt-3">
                    <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
                </div>


            
            <div class="form-group mt-3">
                <input type="submit" name="reg" value="SignUp" class="btn btn-sm btn-dark text-white">

                
                <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger text-white">
            </div>

            
            <div class="form-group mt-3">
                <b class="ms-0">Already have an Account ?<a href="#" data-bs-toggle="modal" data-bs-target="#lg">SignIn</a></b>
            </div>
            </form>
        </div>
     </div> 

   </div>
   <?php 
   require_once("footer.php");
  
   ?>
