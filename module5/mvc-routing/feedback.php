<div class="container p-5 mt-5">
    <h3>Provides your valuables feedback</h3>
    <div class="row mt-5">
        
        <div class="col-md-4 shadow p-4">
        <img src="https://media0.giphy.com/media/DnWU2cQ99Jr6JbmPWM/giphy.gif?cid=6c09b952v4m6xcxe4h5ps4mweq38cehhgtu96448pzbkzt1j&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=g" class="img-fluid">
        </div>

        <?php 
        if(!isset($_SESSION["customer_id"]))
        {
        ?>
        <div class="col-md-7 ms-5 shadow p-4">
        <h3>Feedback Form</h3>
        <hr class="border border-1 w-25">   
          
        <button type="button" class='btn btn-dark text-white' data-bs-toggle="modal" data-bs-target="#login">Please Login First To provide Feetback</button>
      
        </div>

        <?php 
        }
        else 
        {
        ?>

        <div class="col-md-7 ms-5 shadow p-4">
        <h3>Feedback Form</h3>
        <hr class="border border-1 w-25">   
        <form method="post">
            <div class="input-group">
                <input type="text" name="name" placeholder="Name *"  required class="form-control">
            </div>
            <div class="input-group mt-3">
                <input type="text" name="email" placeholder="Email *"  required class="form-control">
            </div>
            <div class="input-group mt-3">
                <input type="text" name="phone" placeholder="Phone *"  required class="form-control">
            </div>

            
            <div class="input-group mt-3">
                <label>Did you Like Food ?</label>
                 &nbsp; Good &nbsp;<input type="radio" name="rating" placeholder="Phone *" value="good">
                 &nbsp; Just Like &nbsp;<input type="radio" name="rating" placeholder="Phone *" value="lust_like">
                 &nbsp; Average &nbsp;<input type="radio" name="rating" placeholder="Phone *" value="average">
            </div>
            <div class="input-group mt-3">
            <textarea name="comment" placeholder="Comment *"  required class="form-control"></textarea>
        </div>

        <div class="input-group mt-3">
        <input type="submit" name="feedback_us" value="Submit" class="btn btn-md btn-dark text-white">
        <input type="reset" name="reset" value="Reset" class="btn btn-md btn-danger text-white ms-4">
        </div>

        </form>
    
    
        </div>

        <?php 
        }
        ?>
        </div>
    </div>
</div>