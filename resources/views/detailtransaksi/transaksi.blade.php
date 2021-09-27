@extends('layout.app')
@section('title',' List Detail Transaksi')


@section('content')
<a href="#" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Detail Transaksi</h3>
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
                  <th>ID Jamaah</th>
                  <th>Package ID</th>
                  <th>Jumlah Setoran</th>
                  <th>Tanggal Setoran</th>
                  <th>Tunggakan Setoran</th>
                  <th>Payment Method</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($detailtransaksi as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->Travel_ID }}</td>
                  <td>{{ $data->Jamaah_ID }}</td>
                  <td>{{ $data->PackageHajiID }}</td>
                  <td>{{ $data->PackageHajiPrice }}</td>
                  <td>{{ $data->Jumlah_setoran }}</td>
                  <td>{{ $data->Tanggal_setoran }}</td>
                  <td>{{ $data->Tunggakan_setoran }}</td>
                  <td>{{ $data->Payment }}</td>
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