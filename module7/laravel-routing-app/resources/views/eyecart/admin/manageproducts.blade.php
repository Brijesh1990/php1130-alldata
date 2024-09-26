@extends('eyecart.admin.layout')
@section('title_name')
Manage all Prosucts
@endsection 
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Manage all Products
   
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
            <th>Photo</th>
            <th>Pname</th>
            <th>OldPrice</th>
            <th>NewPrice</th>
            <th>Qty</th>
            <th>Descriptions</th>
            <th data-breakpoints="xs">Action</th>
        
          </tr>
        </thead>
        <tbody>

          @foreach($product as $row)
          <tr data-expanded="true">
            <td>{{$row->id}}</td>
            <td>{{$row->categoryname}}</td>
            <td>{{$row->subcategoryname}}</td>
            <td><img src="{{asset('uploads/products/'.$row->photo)}}" alt="products" class="img-fluid" style="width:55px; height:55px" /></td>
            <td>{{$row->productname}}</td>
            <td>{{$row->oldprice}}</td>
            <td>{{$row->newprice}}</td>
            <td>{{$row->qty}}</td>
            <td>{{$row->descriptions}}</td>
            <td><a href='{{"/admin-login/manage-products/".$row->id}}' onclick="return confirm('Are you sure to Delete Products ?')"><span class="fa fa-trash text-danger fs-1" style="font-size:25px"></span>
            <a href='{{"/admin-login/edit-products/".$row->id}}'  onclick="return confirm('Are you sure to Edit Products ?')"><span class="fa fa-edit text-primary fs-1 ml-5" style="font-size:25px"></span>
        
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