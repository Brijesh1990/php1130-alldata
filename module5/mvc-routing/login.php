<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog" style="min-width:50%; margin-top: 10%;">
        <div class="modal-content p-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://media0.giphy.com/media/DnWU2cQ99Jr6JbmPWM/giphy.gif?cid=6c09b952v4m6xcxe4h5ps4mweq38cehhgtu96448pzbkzt1j&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=g" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <form method="post">
                      
                        <div class="input-group mt-3">
                            <input type="text" name="email" placeholder="Email *"  required class="form-control">
                        </div>
                        <div class="input-group mt-3">
                            <input type="password" name="password" placeholder="Password *"  required class="form-control">
                        </div>
            
                    <div class="input-group mt-3">
                    <input type="submit" name="login" value="Login" class="btn btn-md btn-dark text-white">
                    <b>&nbsp; <a href="<?php echo $mainurl;?>forgetpassword">Forget Password ?</a></b>
                    </div>

                    <div class="input-group mt-3">
                       
                        <b>&nbsp; Do'nt have an account ?<a href="<?php echo $mainurl;?>register">Create an Account</a></b>
                    </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>