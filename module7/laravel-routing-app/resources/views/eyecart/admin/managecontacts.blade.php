@extends('eyecart.admin.layout')
@section('title_name')
Manage all contacts
@endsection 
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Manage all Category
   
    </div>
    <div>
      <!-- pass session flash data messages fro delete -->
     @if(Session('del'))
     <div class='alert alert-danger w-50 mx-auto' style='width:50% !important;  margin:auto; margin-top:2% !important;'>
      <span class='text-dark'>{{session('del')}}</span></div>
     </div>
    @endif
    
      <!-- pass session flash data messages for update -->
      @if(Session('upd'))
     <div class='alert alert-success w-50 mx-auto' style='width:50% !important;  margin:auto; margin-top:2% !important;'>
      <span class='text-dark'>{{session('upd')}}</span></div>
     </div>
    @endif
      <table class="table" id="example">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Phone</th>
            <th>Message</th>
            <th data-breakpoints="xs">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach($data as $row)
          <tr data-expanded="true">
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->subject}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->message}}</td>
            <td><a href='{{"/admin-login/manage-contacts/".$row->id}}' onclick="return confirm('Are you sure to Delete Contacts ?')"><span class="fa fa-trash text-danger fs-1" style="font-size:25px"></span>
            
        
        </td>
        @endforeach
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<!-- scripts for data tables called here -->
 <script>
  $(document).ready(function(){
    new DataTable('#example');
  })
</script>
@endsection 