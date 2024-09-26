@extends('eyecart.admin.layout')
@section('title_name')
Manage all Subcategories
@endsection 
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Manage all SubCategory
   
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
            <th>CategoryName</th>
            <th>SubCategoryName</th>
            <th>Descriptions</th>
            <th data-breakpoints="xs">Action</th>
        
          </tr>
        </thead>
        <tbody>

          @foreach($subcategory as $row)
          <tr data-expanded="true">
            <td>{{$row->id}}</td>
            <td>{{$row->categoryname}}</td>
            <td>{{$row->subcategoryname}}</td>
            <td>{{$row->subcategorydescriptions}}</td>
            <td><a href='{{"/admin-login/manage-subcategory/".$row->id}}' onclick="return confirm('Are you sure to Delete SubCategory ?')"><span class="fa fa-trash text-danger fs-1" style="font-size:25px"></span>
            <a href='{{"/admin-login/edit-subcategory/".$row->id}}'  onclick="return confirm('Are you sure to Edit SubCategory ?')"><span class="fa fa-edit text-primary fs-1 ml-5" style="font-size:25px"></span>
        
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