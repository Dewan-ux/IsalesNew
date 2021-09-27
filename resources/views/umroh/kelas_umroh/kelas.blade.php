@extends('layout.app')
@section('title',' Kelas Umroh')


@section('content')
<a href="/kelasumroh/add" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kelas Umroh</h3>
            </div>

             @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

        <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>ID</th>  
                  <th>Kode Kelas Umroh</th>
                  <th>Nama Kelas Umroh</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($kelasumroh as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->PackageClassCode }}</td>
                  <td>{{ $data->PackageClassName }}</td>
                  <td>{{ $data->Price }}</td>
                  <td>
                      <a href="/kelasumroh/detail/{{ $data->PackageClassID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                    @endforeach
               </tbody>
              </table>
@endsection