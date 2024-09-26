@extends('layouts.app')
@section('content')
<div class="container p-3">
<div class="col-md-12">
<div class="card">
<div class="card-header">{{ __('Dashboard') }}</div>
<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<!-- create a dashboard here -->

<div class="row">
<div class="col-md-4 shadow">
<ul class="sidebar-links">
<ul>
<li><a href="/managecustomers">Manage Customers</a></li>
<li><a href="/addblogs">Add Blogs</a></li>
<li><a href="/manageblogs">Manage Blogs</a></li>
<li><a href="/managecontact">Manage Contact</a></li>
<li><a href="/managefeedback">Manage Feedback</a></li>

</ul>

</ul>
</div>
<div class="col-md-8">
<h2 class="text-center">Add Blogs here</h2>

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

<form method="post" enctype="multipart/form-data">
@csrf 
<div class="form-group mt-3">
<input type="text" name="title" placeholder="Blogs Title" class="form-control" />
</div>

<div class="form-group mt-3">
<input type="file" name="photo" placeholder="Blogs Photo" class="form-control" />
</div>


<div class="form-group mt-3">
<input type="date" name="date" placeholder="Added Date" class="form-control" />
</div>

<div class="form-group mt-3">
<textarea type="text" name="descriptions" placeholder="Blogs Descriptions" class="form-control"></textarea>
</div>

<div class="form-group mt-3">
<input type="submit"  value="AddBlogs" class="btn btn-dark text-white" />
</div>

</form>    
</div>
</div>
</div>

@endsection
