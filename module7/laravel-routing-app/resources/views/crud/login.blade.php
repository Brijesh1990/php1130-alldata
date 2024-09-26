<!-- used inherit to used or extends layout in content -->
@extends('crud.layout')
@section('title_name')
Home Page
@endsection

@section('content')
<div class="container-fluid bg-transparent p-3 w-75 mt-5">
<div class="row">
<div class="col-md-4">
<img src="https://media.tenor.com/w-boZxCBeu0AAAAj/career-great-employee.gif" class="img-fluid p-2 w-100 mt-5" />
</div>

<div class="col-md-8">
<!-- Login form -->
<h1 class="text-center text-dark mt-5">Login Form <span class="bi bi-person-add text-dark"></span></h1>
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
<div class="input-group  mx-auto mt-3">
<input type="submit" name="login" value="Login" class="btn btn-white bg-white">
</div>

<div class="input-group   mx-auto mt-3">
<b>Don't have an account ?<a href="#"  class="ms-3 text-primary" data-bs-toggle="modal" data-bs-target="#ademp">Register here</a></b>
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
<b>Already have an account ?<a href="/create-account" class="ms-3 text-primary">Login</a></b>
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