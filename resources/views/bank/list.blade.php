@extends('layout.app')
@section('title','List Bank')


@section('content')

<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data List Bank</h3>
            </div>
        <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>ID</th>  
                  <th>Code Bank</th>
                  <th>Name</th>
                  <th>Logo</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($listbank as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->BankCode }}</td>
                  <td>{{ $data->BankName }}</td>
                  <td><img src="{{ url('image_listbank/'.$data->Logo) }}" width="200px"></td>
                  <td>
                      <a href="/listbank/detail/{{ $data->BankID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                    @endforeach
                </tr>
                
               </tbody>
              </table>

@endsection