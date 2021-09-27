@extends('layout.app')
@section('title','Transaksi Haji')


@section('content')
 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Transaksi Haji</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <div class="scrollmenu">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>No</th>  
                  <th>ID Customer</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>No Hp</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Umur</th>
                  <th>NIK</th>
                  <th>Package Name</th>
                  <th>Class Name</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Nama Jamaah</th>
                  <th>Payment Method</th>
                  <th>Bukti Transaksi</th>
                  <th>Bukti Pelunasan</th>
                  <th>Action</th>
                  <th>Edit</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($transaksihaji as $data)
                <tr> 
                    <td>{{ $no++ }}</td>  
                    <td>{{ $data->CustID }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->NoTelp }}</td>
                    <td>{{ $data->tgl_lahir }}</td>
                    <td>{{ $data->jns_kelamin }}
                    <td>{{ $data->umur }} 
                    <td>{{ $data->NIK }}
                    <td>{{ $data->PackageName }}
                    <td>{{ $data->ClassName }}  
                    <td>{{ $data->quantity }}
                    <td>{{ $data->total }}
                    <td>{{ $data->Nama_Jamaah }}
                    <td>{{ $data->PaymentTypeName }}
                    <td>{{ $data->bukti_transaksi }}
                    <td>{{ $data->bukti_pelunasan }}
        
                  <td>
                      <a href="" class="btn btn-sm btn-success">Not yet paid</a>
                      <a href="" class="btn btn-sm btn-warning">Paid</a>
                      <a href="" class="btn btn-sm btn-danger">Expaired</a>
                  </td>
                  <td><a href="" class="btn btn-sm btn-warning">Edit</a></td>
                    @endforeach
                </tr>
                
               </tbody>
              </table>
                </div>
            </div>

@endsection