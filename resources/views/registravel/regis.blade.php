@extends('layout.app')
@section('title','List Travel')


@section('content')

<a href="#" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Travel</h3>
            </div>

            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

        <!-- /.box-header -->
            <div class="box-body">
              <div class="scrollmenu">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>No</th>  
                  <th>Nama Travel</th>
                  <th>Logo</th>
                  <th>Alamat</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Penanggung Jawab</th>
                  <th>Kota</th>
                  <th>Kategori</th>
                  <th>Rating</th>
                  <th>Action</th>

                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($registravel as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->TravelName }}</td>
                  <td><img src="{{ url('LogoTravel/'.$data->logo) }}" width="150px"></td>
                  <td>{{ $data->address }}</td>
                  <td>{{ $data->phone }}</td>
                  <td>{{ $data->Email }}</td>
                  <td>{{ $data->PenanggungJawab }}</td>
                  <td>{{ $data->kota }}</td>
                  <td>{{ $data->kategori }}</td>
                  <td>{{ $data->rating }}</td>
                  <td>
                      <a href="" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                    @endforeach
                </tr>
                
               </tbody>
              </table>
              </div>
            </div>

@endsection