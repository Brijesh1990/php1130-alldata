@extends('eyecart.admin.layout')
@section('title_name')
Add Products 
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
<form method="post" enctype="multipart/form-data">
@csrf 
<!-- csrf token this is used to send securely form data in data base there we pass a csrf token in laravel -->
<div class="form-group">
<label for="exampleInputEmail1">Select CategoryName</label>
<select name='categoryname' class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    <option value=''>-select category-</option>
    @foreach($category as $category1)
    <option value='{{$category1->id}}'>{{$category1->categoryname}}</option>
    @endforeach
</select>
</div>

<div class="form-group">
<label for="exampleInputEmail1">Select CategoryName</label>
<select name='subcategoryname' class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    <option value=''>-select subcategory-</option>
    @foreach($subcategory as $subcategory1)
      <!-- @if($subcategory=='id' && $subcategory1=='subcategory_id') -->
    <option value='{{$subcategory1->id}}'>{{$subcategory1->subcategoryname}}</option>
    <!-- @endif -->
    @endforeach
</select>
</div>
<div class="form-group">
<label for="exampleInputEmail1">ProductImage</label>
<input type="file" name='productimg' class="form-control" id="exampleInputEmail1" placeholder="ProductImage">
</div>
<div class="form-group">
<label for="exampleInputEmail1">ProductName</label>
<input type="text" name='productname' class="form-control" id="exampleInputEmail1" placeholder="ProductName">
</div>

<div class="form-group">
<label for="exampleInputEmail1">ProductName</label>
<input type="text" name='oldprice' class="form-control" id="exampleInputEmail1" placeholder="Product old price">
</div>
<div class="form-group">
<label for="exampleInputEmail1">ProductName</label>
<input type="text" name='newprice' class="form-control" id="exampleInputEmail1" placeholder="Product Offer Price">
</div>
<div class="form-group">
<label for="exampleInputEmail1">qty</label>
<input type="number" name='qty' class="form-control" id="exampleInputEmail1" placeholder="ProductName Qty">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Descriptions</label>
<textarea class="form-control" name='descriptions' id="exampleInputPassword1" placeholder="Products descriptions"></textarea>
</div>
<button type="submit" class="btn btn-info">AddProducts</button>
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