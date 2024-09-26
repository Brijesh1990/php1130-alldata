@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
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
<h2 class="text-center">Welcome to Dashboard</h2>

<p class="w-75 mx-auto">Blogging platforms make it easy for people to share their thoughts and ideas with the world, connect with others who share similar interests, and promote an open dialogue and exchange of ideas. These platforms can also be a useful tool for marketing and branding, as strong blogs can reach a large audience and build a loyal following.

Here are the best blogging platforms available today. Find the best solution for your needs and budget.</p>
</div>
</div>



</div>
</div>
</div>
</div>
</div>
@endsection
