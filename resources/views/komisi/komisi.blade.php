@extends('layout.app')
@section('title',' List Data Komisi')


@section('content')
<a href="#" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Komisi</h3>
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
                  <th>No</th>  
                  <th>ID Travel</th>
                  <th>ID Package</th>
                  <th>Tarif</th>
                  <th>Jumlah Jamaah</th>
                  <th>Jumlah Setoran</th>
                  <th>Komisi</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($komisi as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->Travel_ID }}</td>
                  <td>{{ $data->PackageHajiID }}</td>
                  <td>{{ $data->Tarif }}</td>
                  <td>{{ $data->Jumlah_Jamaah }}</td>
                  <td>{{ $data->Jumlah_setoran }}</td>
                  <td>{{ $data->Komisi }}</td>
                  <td>
                      <a href="" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                    @endforeach
               </tbody>
              </table>
@endsection