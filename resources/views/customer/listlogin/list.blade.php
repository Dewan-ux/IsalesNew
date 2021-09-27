@extends('layout.app')
@section('title',' User Login List')


@section('content')
<style>
.column {
  float: left;
  width: 100%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  size: 30px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<a href="/userlist" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Customer List Data</h3>
            </div>
        <!-- /.box-header -->
            <div style="overflow-x:auto;">
			<div class="column">
              <table class="table table-striped table-hover">
                  
                <tr>
                  <th>User ID</th> 
                  <th>User Name</th>
				  <th>User Email</th>
				  <th>User Type</th>
				  
				  <th>Action</th>
                </tr>
                  
                
                
                  <?php $no=1; ?>
                    @foreach ($user as $data)
                      
                <tr> 
                  <td> {{ $no++ }} </td>  
                  <td> {{ $data->name }} </td>
				  <td> {{ $data->email }} </td>
				  <td> {{ $data->user_type }} </td>
                  <td>
                      <a href="" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                    @endforeach
               
              </table>
			  </div>
			 
@endsection