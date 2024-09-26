<!-- used inherit to used or extends layout in content -->
@extends('crud.layout')
@section('title_name')
Contact us
@endsection
@section('content')
<div class="container bg-transparent p-2 w-100 mt-5">
<div class="row">
<div class="col-md-5 mt-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6799314943046!2d70.77238027412226!3d22.29011104326695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies!5e0!3m2!1sen!2sin!4v1719211433008!5m2!1sen!2sin" width="100%" height="250" style="border:0; margin-top:14%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="col-md-7">
<h5 class="text-center text-dark mt-5">Contact Form <span class="bi bi-person-add text-white"></span></h5>
<hr class="w-25 mx-auto border border-1 border-dark">

<!-- contact us form -->
<form>
<div class="input-group  mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-inbox"></i></span>
<input type="text" name="email" placeholder="Email *" class="form-control">
</div>

<div class="input-group mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-phone"></i></span>
<input type="text" name="phone" placeholder="Phone *" class="form-control">
</div>
<div class="input-group  mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-lock"></i></span>
<input type="text" name="subject" placeholder="Subject *" class="form-control">
</div>


<div class="input-group  mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
<textarea name="address" placeholder="Address *" class="form-control"></textarea>
</div>
<div class="input-group  mx-auto mt-3">
<input type="submit" name="send" value="Send" class="btn btn-white bg-white">
<input type="reset" name="reset" value="Reset" class="btn btn-danger bg-danger ms-3">

</div>


</form>


</div>
</div>
</div>    


<!-- add employee modal load here -->
<div class="modal fade" role="dialog" id="ademp">
<div class="modal-dialog">
<div class="modal-content p-4">
<h1 class="text-center text-dark mt-5">Add Employee Form <span class="bi bi-person-add text-dark"></span></h1>
<hr class="w-25 mx-auto border border-1 border-dark">
<form>
<div class="input-group  mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-inbox"></i></span>
<input type="text" name="email" placeholder="Email *" class="form-control">
</div>

<div class="input-group  mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-lock"></i></span>
<input type="password" name="pwd" placeholder="Password *" class="form-control">
</div>

<div class="input-group mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-phone"></i></span>
<input type="text" name="phone" placeholder="Phone *" class="form-control">
</div>
<div class="input-group  mx-auto mt-3">
<span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
<textarea name="address" placeholder="Address *" class="form-control"></textarea>
</div>
<div class="input-group  mx-auto mt-3">
<input type="submit" name="login" value="SignUp" class="btn btn-white bg-white">
<input type="reset" name="reset" value="Reset" class="btn btn-danger bg-danger ms-3">

</div>

<div class="input-group   mx-auto mt-3">
<b>Already have an account ?<a href="index.html" class="ms-3 text-primary">Login</a></b>
</div>
</form>


<h4 class="text-danger mt-5 text-center">Follow Us on</h4>
<hr class="w-25 mx-auto">
<h1 class="text-center"><span class="bi bi-facebook text-primary"></span>
<span class="bi bi-google text-primary"></span>
<span class="bi bi-youtube text-danger"></span>
<span class="bi bi-instagram text-danger"></span>
<span class="bi bi-whatsapp text-success"></span>
<span class="bi bi-twiter text-primary"></span>
<span class="bi bi-snapchat text-warning"></span>
</h1>

</div>
</div>
</div>



@endsection