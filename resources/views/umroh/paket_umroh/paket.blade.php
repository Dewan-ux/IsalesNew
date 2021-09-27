@extends('layout.app')
@section('title','Paket Umroh')


@section('content')

<a href="/umroh/add" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Paket Umroh</h3>
            </div>

            @if (session('status'))
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('status') }}
              </div>
            @endif

        <!-- /.box-header -->
            <div class="box-body">
              <div class="scrollmenu">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>Package ID</th>  
                  <th>Package Code</th>
                  <th>Travel Name</th>
                  <th>Package Name</th>
                  <th width="150px">Description</th>
                  <th>Price</th>
                  <th>Available Seets</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($umroh as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->PackageCode }}</td>
                  <td>{{ $data->Penyelenggara }}</td>
                  <td>{{ $data->PackageName }}</td>
                  <td>{{ $data->PackageDesc }}</td>
                  <td>{{ $data->PackagePrice }}</td>
                  <td>{{ $data->PackageAvailSeets }}</td>
                  <td><img src="{{ url('image_umroh/'.$data->Image) }}" width="100px"></td>
                  <td>
                      <a href="/umroh/detail/{{ $data->PackageID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                    @endforeach
                </tr>
                
               </tbody>
              </table>
              </div>
            </div>

@endsection