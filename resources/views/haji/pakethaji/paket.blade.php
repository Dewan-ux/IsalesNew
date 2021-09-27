@extends('layout.app')
@section('title','Paket Haji')


@section('content')

<a href="/pakethaji/add" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Paket Haji</h3>
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
                  <th>ID</th>  
                  <th>Package Haji Code</th>
                  <th>Travel Name</th>
                  <th>Package Name</th>
                  <th width="200px">Description</th>
                  <th>Price</th>
                  <th>Available Seets</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($pakethaji as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->PackageHajiCode }}</td>
                  <td>{{ $data->Penyelenggara }}</td>
                  <td>{{ $data->PackageHajiName }}</td>
                  <td>{{ $data->PackageHajiDesc }}</td>
                  <td>{{ $data->Price }}</td>
                  <td>{{ $data->HajiAvailSeets }}</td>
                  <td><img src="{{ url('image_haji/'.$data->PackageHajiImage) }}" width="100px"></td>
                  <td>
                      <a href="/pakethaji/detail/{{ $data->PackageHajiID }}" class="btn btn-sm btn-success">Detail</a>
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