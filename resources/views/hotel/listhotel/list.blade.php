@extends('layout.app')
@section('title','List Hotel')


@section('content')
<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data List Hotel</h3>
            </div>
        <!-- /.box-header -->
            <div class="box-body">
              <div class="scrollmenu">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>Hotel List ID</th>  
                  <th>Hotel List Code</th>
                  <th>Travel Name</th>
                  <th>Hotel List Name</th>
                  <th>Hotel List Location</th>
                  <th width="150px">Description</th>
                  <th>Hotel list Image</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($hotel as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->HotelListCode }}</td>
                  <td>{{ $data->HotelTravelName }}</td>
                  <td>{{ $data->HotelListName }}</td>
                  <td>{{ $data->HotelListLocation }}</td>
                  <td>{{ $data->HotelDesc }}</td>
                  <td><img src="{{ url('image_hotel/'.$data->HotelListImage) }}" width="100px"></td>
                  <td>
                      <a href="/hotel/detail/{{ $data->HotelListID }}" class="btn btn-sm btn-success">Detail</a>
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