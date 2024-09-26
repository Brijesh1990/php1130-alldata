@extends('eyecart.admin.layout')
@section('title_name')
Add category 
@endsection 
@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="form-w3layouts">
<!-- page start-->
<!-- page start-->
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">
Add Category here
</header>
<div class="panel-body">
<div class="position-center">
<!-- pass a error validations messages -->
 @if($errors->any())
 <div class='alert alert-danger'>
    @foreach($errors->all() as $error)
    <ul>
        <li>{{$error}}</li>
    </ul>
    @endforeach
 </div>
 @endif

<!-- flash Session data messages  -->
@if(Session('success'))
<div class='alert alert-success'>
    <span class='text-dark'>{{session('success')}}</span>
</div>
@endif
<form method="post">
@csrf 
<!-- csrf token this is used to send securely form data in data base there we pass a csrf token in laravel -->
<div class="form-group">
<label for="exampleInputEmail1">CategoryName</label>
<input type="text" name='categoryname' class="form-control" id="exampleInputEmail1" placeholder="Enter email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Descriptions</label>
<textarea class="form-control" name='categorydescriptions' id="exampleInputPassword1" placeholder="Category descriptions"></textarea>
</div>


<button type="submit" class="btn btn-info">AddCategory</button>
</form>
</div>

</div>
</section>

</div>

</div>

</div>

</div>
</div>


<!-- page end-->
</div>
</section>


@endsection