@extends('layout.app')
@section('title','Paket Umroh')


@section('content')

<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Paket Umroh</h3>
            </div>
        <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>Package ID</th>  
                  <th>Package Code</th>
                  <th>Package Name</th>
                  <th>Package Description</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($umroh as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->PackageCode }}</td>
                  <td>{{ $data->PackageName }}</td>
                  <td>{{ $data->PackageDesc }}</td>
                  <td>
                      <a href="/umroh/detail/{{ $data->PackageID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                    @endforeach
                </tr>
                
               </tbody>
              </table>

@endsection