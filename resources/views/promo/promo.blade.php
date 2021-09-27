@extends('layout.app')
@section('title','List Promo')


@section('content')
<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data List Promo</h3>
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
                  <th>ID</th>  
                  <th>Promo Code</th>
                  <th>Name</th>
                  <th width="150px">Description</th>
                  <th>Promo Start</th>
                  <th>Promo End</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($listpromo as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->PromoCode }}</td>
                  <td>{{ $data->PromoName }}</td>
                  <td>{{ $data->PromoDesc }}</td>
                  <td>{{ $data->PromoStart }}</td>
                  <td>{{ $data->PromoEnd }}</td>
                  <td><img src="{{ url('Promo/'.$data->PromoImage) }}" width="150px"></td>
                  <td>
                      <a href="" class="btn btn-sm btn-success">Detail</a>
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