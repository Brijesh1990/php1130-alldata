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
<div class="col-md-3 shadow">
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
<div class="col-md-9">
<h2 class="text-center">Manage Blogs here</h2>

<!-- flash Session data messages  -->
@if(Session('success'))
<div class='alert alert-success'>
   <span class='text-dark'>{{session('success')}}</span>
</div>
@endif
<form method="post">
@csrf 
<table class='table table-responsive'>
<tr>
    <th>#id</th>
    <th>Title</th>
    <th>Photo</th>
    <th>Added date</th>
    <th>Descriptions</th>
    <th>Actions</th>
</tr>
@foreach($data as $row)
<tr>
    <td>{{$row->id}}</td>
    <td>{{$row->title}}</td>
    <td><img src="{{asset('uploads/blogs/'.$row->photo)}}" class="" style="width:85px; height: 85px;"></td>
    <td>{{$row->added_date}}</td>
    <td>{{$row->descriptions}}</td>
    <td><a href="#" class="btn btn-danger text-white btn-sm"><span class="bi bi-trash text-white"></span></a>
        <a href="#" class="btn btn-primary text-white btn-sm"><span class="bi bi-pencil text-white"></span></a>
    </td>
</tr>
@endforeach
    

</table>
</form>    
</div>
</div>
</div>

@endsection
