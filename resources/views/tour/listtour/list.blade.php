@extends('layout.app')
@section('title','List Tour Name')


@section('content')
<a href="/tour/add" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data List Tour</h3>
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
                  <th>Tour ID</th>  
                  <th>Tour Code</th>
                  <th>Travel Name</th>
                  <th>Tour Name</th>
                  <th>Tour Price</th>
                  <th width="150px">Tour Itenary</th>
                  <th>Available Seets</th>
                  <th>Tour Image</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($tour as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->TourPriceCode }}</td>
                  <td>{{ $data->TourTravelName }}</td>
                  <td>{{ $data->TourPriceName }}</td>
                  <td>{{ $data->TourPrice }}</td>
                  <td>{{ $data->TourItenary }}</td>
                  <td>{{ $data->TourAvailSeets }}</td>
                  <td><img src="{{ url('image_tour/'.$data->TourImage) }}" width="150px"></td>
                  <td>
                      <a href="/tour/detail/{{ $data->TourPriceID }}" class="btn btn-sm btn-success">Detail</a>
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