@extends('layout.app')
@section('title','Tipe Kamar Hotel')


@section('content')
<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Tipe Kamar Hotel</h3>
            </div>
        <!-- /.box-header -->
        
            <div class="box-body">
                <div class="scrollmenu">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>ID</th>  
                  <th>Hotel List ID</th>
                  <th>Tipe Kamar</th>
                  <th>Harga</th>
                  <th>Tamu</th>
                  <th>Tipe Ranjang</th>
                  <th>Ukuran Kamar</th>
                  <th width="150px">Fasilitas Kamar</th>
                  <th>Fasilitas Kamar Mandi</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($hotelroomtype as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->HotelListID }}</td>
                  <td>{{ $data->HotelRoomTypeName }}</td>
                  <td>{{ $data->PriceRoomType }}</td>
                  <td>{{ $data->Tamu }}</td>
                  <td>{{ $data->TipeRanjang }}</td>
                  <td>{{ $data->UkuranKamar }}</td>
                  <td>{{ $data->FasilitasKamar }}</td>
                  <td>{{ $data->FasilitasKamarMandi }}</td>
                  <td><img src="{{ url('hotelroomtype/'.$data->Image) }}" width="100px"></td>
                  <td>
                      <a href="/roomtype/detail/{{ $data->HotelRoomTypeID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
               </tbody>
              </table>
              </div>
            </div>
@endsection