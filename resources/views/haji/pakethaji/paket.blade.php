@extends('layout.app')
@section('title','Paket Haji')


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
                  <th>Package Haji ID</th>  
                  <th>Package Haji Code</th>
                  <th>Package Haji Name</th>
                  <th width="200px">Description</th>
                  <th>Price</th>
                  <th>Available Seets</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($pakethaji as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->PackageHajiCode }}</td>
                  <td>{{ $data->PackageHajiName }}</td>
                  <td>{{ $data->PackageHajiDesc }}</td>
                  <td>{{ $data->PackageHajiPrice }}</td>
                  <td>{{ $data->HajiAvailSeets }}</td>
                  <td>
                      <a href="/pakethaji/detail/{{ $data->PackageHajiID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                    @endforeach
                </tr>
                
               </tbody>
              </table>

@endsection