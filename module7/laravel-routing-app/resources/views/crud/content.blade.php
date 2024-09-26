<!-- used inherit to used or extends layout in content -->
@extends('crud.layout')
@section('title_name')
Home Page
@endsection

@section('content')
<div class="container-fluid bg-transparent p-3 w-50 mt-5">
<div class="row">
<div class="col-md-3">
<img src="https://media.tenor.com/w-boZxCBeu0AAAAj/career-great-employee.gif" class="img-fluid p-2 w-100 mt-5" />
</div>

<div class="col-md-9">
<h5 class="text-center text-dark mt-5">Click to Add Employee Here <button type="button" class="btn btn-md btn-dark text-white bg-dark ms-5" data-bs-toggle="modal" data-bs-target="#ademp">Add Employee <span class="bi bi-person-add text-white"></span></button></h5>
<hr class="w-25 mx-auto border border-1 border-dark">

<!-- display employee -->
<table class="table table-responsive table-borderless">
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Salary</th>
<th>Address</th>
<th>CompanyName</th>
<th>Action</th>
</tr>

<tr>
<td>1</td>
<td>Brijesh</td>
<td>b@gmail.com</td>
<td>998003879</td>
<td>89500</td>
<td>Rajkot</td>
<td>Tops Tech</td>
<td>
<div style="min-width:100px"><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a>

<a href="" class="btn btn-sm btn-primary text-white"><span class="bi bi-pencil"></span></a>
</div>
</td>

</tr>
</table>

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