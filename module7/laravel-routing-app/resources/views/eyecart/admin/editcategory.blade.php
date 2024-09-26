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
Edit Category here
</header>
<div class="panel-body">
<div class="position-center">
<form method="post">
@csrf 
<!-- csrf token this is used to send securely form data in data base there we pass a csrf token in laravel -->
<div class="form-group">
<label for="exampleInputEmail1 text-success">Edit CategoryName</label>
<input type="text" name='categoryname' value="{{$editcategory->categoryname}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
</div>
<div class="form-group">
<label for="exampleInputPassword1 text-success">Edit Descriptions</label>
<textarea class="form-control" name='categorydescriptions'  id="exampleInputPassword1" placeholder="Category descriptions">{{$editcategory->categorydescriptions}}</textarea>
</div>
<button type="submit" class="btn btn-info">UpdateCategory</button>
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