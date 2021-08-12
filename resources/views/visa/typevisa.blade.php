@extends('layout.app')
@section('title','Visa')


@section('content')
<a href="/visa/add" class="btn btn-primary btn-sm">Add Data</a> 
        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Type Visa</h3>
            </div>
        <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-hover">
                <tr>
                  <th>No</th>
                  <th>Visa Type Code</th>
                  <th>Visa Type Name</th>
                  <th>Action</th>
                </tr>
                <tr>
                    <?php $VisaTypeID=1; ?>
                @foreach ($visa as $data)
                    
                  <td>{{ $VisaTypeID++ }}</td>
                  <td>{{ $data->VisaTypeCode }}</td>
                  <td>{{ $data->VisaTypeName }}</td>
                  <td>
                      <a href="/visa/edit/{{ $data->VisaTypeID }}" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                
                @endforeach
                </tr>
              </table>
            </div>
@endsection