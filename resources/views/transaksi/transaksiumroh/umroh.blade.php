@extends('layout.app')
@section('title','Transaksi Umroh')


@section('content')
 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Transaksi Umroh</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <div class="scrollmenu">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>ID Transaksi</th>  
                  <th>ID Customer</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>No Hp</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Umur</th>
                  <th>Nama Jamaah</th>
                  <th>Bulan Keberangkatan</th>
                  <th>Kota Keberangkatan</th>
                  <th>Maskapai</th>
                  <th>Paket Umroh</th>
                  <th>Kelas Umroh</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                  <th>Berkas</th>
                  <th>Tipe Payment</th>
                  <th>Bukti Transaksi</th>
                  <th>Bukti Pelunasan</th>
                  <th>Action</th>
                  <th>Edit</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($transaksiumroh as $data)
                <tr> 
                    <td>{{ $no++ }}</td>  
                    <td>{{ $data->CustID }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->no_hp }}</td>
                    <td>{{ $data->tgl_lahir }}</td>
                    <td>{{ $data->jenis_kelamin }}
                    <td>{{ $data->umur }} 
                    <td>{{ $data->Nama_Jamaah }}
                    <td>{{ $data->bulan_keberangkatan }}
                    <td>{{ $data->kota_keberangkatan }}
                    <td>{{ $data->maskapai }}
                    <td>{{ $data->paket_umroh }}
                    <td>{{ $data->kelas_umroh }}
                    <td>{{ $data->quantity }}
                    <td>{{ $data->SubTotal }}
                    <td>{{ $data->berkas }}
                    <td>{{ $data->tipe_payment }}
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