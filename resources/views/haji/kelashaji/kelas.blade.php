@extends('layout.app')
@section('title','Class Haji')


@section('content')

<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Class Haji</h3>
            </div>
        <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-hover">
                  <thead>
                <tr>
                  <th>Class Haji ID</th>  
                  <th>Class Haji Code</th>
                  <th>Class Haji Name</th>
                  <th>Action</th>
                </tr>
                  </thead>
                
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($kelashaji as $data)
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->ClassCode }}</td>
                  <td>{{ $data->ClassName }}</td>
                  <td>
                      <a href="/kelashaji/detail/{{ $data->ClassID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                    @endforeach
                </tr>
                
               </tbody>
              </table>

@endsection