@extends('layout.app')
@section('title',' LA Type Name')


@section('content')
<a href="/latype/add" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">LA Type Data</h3>
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
                  <th>LA Type ID</th>  
                  <th>LA Type Code</th>
                  <th>LA Type Name</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                  <?php $no=1; ?>
                    @foreach ($latype as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->LaTypeCode }}</td>
                  <td>{{ $data->LaTypeName }}</td>
                  <td>
                      <a href="/latype/detail/{{ $data->LaTypeID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                    @endforeach
               </tbody>
              </table>
@endsection