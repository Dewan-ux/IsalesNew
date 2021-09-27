@extends('layout.app')
@section('title','List LA Name')


@section('content')
<a href="/listla/add" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data List LA</h3>
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
                  <th>LA ID</th>  
                  <th>LA Code</th>
                  <th>Travel Name</th>
                  <th>LA List Name</th>
                  <th>Price</th>
                  <th width="150px">LA Itenary</th>
                  <th>Available Seets</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($listla as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->ListLaCode }}</td>
                  <td>{{ $data->LaTravelName }}</td>
                  <td>{{ $data->ListLaName }}</td>
                  <td>{{ $data->ListLaPrice }}</td>
                  <td>{{ $data->LaItenary }}</td>
                  <td>{{ $data->LaAvailSeets }}</td>
                  <td><img src="{{ url('image_la/'.$data->LaImage) }}" width="150px"></td>
                  <td>
                      <a href="/listla/detail/{{ $data->ListLaID }}" class="btn btn-sm btn-success">Detail</a>
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