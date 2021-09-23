@extends('layout.app')
@section('title',' Flight Class Name')


@section('content')
<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Flight Class Data</h3>
            </div>
        <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>Flight Class ID</th>  
                  <th>Flight Class Code</th>
                  <th>Flight Class Name</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($flightclass as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->FlightListClassCode }}</td>
                  <td>{{ $data->FlightListClassName }}</td>
                  <td>
                      <a href="/flightclass/detail/{{ $data->FlightListClassID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                    @endforeach
               </tbody>
              </table>
@endsection