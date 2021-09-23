@extends('layout.app')
@section('title','List Tiket Pesawat')


@section('content')
<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data List Tour</h3>
            </div>
        <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>Flight ID</th>  
                  <th>Flight Code</th>
                  <th>Flight Name</th>
                  <th>Flight Class Code</th>
                  <th>Flight Company</th>
                  <th>Flight Seets</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($flight as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->FlightListCode }}</td>
                  <td>{{ $data->FlightListName }}</td>
                  <td>{{ $data->FlightListClassID }}</td>
                  <td>{{ $data->FlightListCompany }}</td>
                  <td>{{ $data->FlightListSeets }}</td>
                  
                  <td>
                      <a href="/flight/detail/{{ $data->FlightListID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                    @endforeach
               </tbody>
              </table>
@endsection