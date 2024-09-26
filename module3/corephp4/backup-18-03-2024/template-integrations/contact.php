<?php 
require_once("header.php");
require_once("navbar.php");

?>

   <!-- content start here -->

   <div class="container p-5 mt-5">
      <h1 class="p-3">Get in Touch with Us Contact us <span class="bi bi-geo-alt"></span></h1>
      <hr class="border border-1 border-danger">
      <div class="row">
        <div class="col-md-6 login-sidebar m-0 p-0">
            <div class="text-overlay">
              <ul>
                <li class="p-5"><h2 class="text-white">Get in touch in Google Map
                    <hr class="border border-1 border-white"></h2></li>
                <li class="p-0 ms-0"><p class="text-white">101, Aditya Complex, Jalaram 2 Street Number 2, above Sbi Bank, Near Indira Circle, Jala Ram Nagar, Rajkot, Gujarat 360005</p></li>
                <li class="p-0 ms-0"><p class="text-white">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d118133.77956216878!2d70.69255357226606!3d22.290085304537417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2s101%2C%20Aditya%20Complex%2C%20Jalaram%202%20Street%20Number%202%2C%20above%20Sbi%20Bank%2C%20Near%20Indira%20Circle%2C%20Jala%20Ram%20Nagar%2C%20Rajkot%2C%20Gujarat%20360005!3m2!1d22.2901061!2d70.7749552!5e0!3m2!1sen!2sin!4v1705905602853!5m2!1sen!2sin" width="80%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p></li>
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
                <input type="submit" name="send" value="Send" class="btn btn-sm btn-dark text-white">

                
                <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger text-white">
            </div>

           
            </form>
        </div>
     </div> 

   </div>



   <?php 

require_once("footer.php");
require_once("login.php");
require_once("forgetpassword.php");
?>