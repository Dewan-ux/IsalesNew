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
                  <th>No</th>
                  <th>Visa Type Code</th>
                  <th>Visa Type Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $VisaTypeID=1; ?>
                @foreach ($visa as $data)
                  <tr>  
                  <td>{{ $VisaTypeID++ }}</td>
                  <td>{{ $data->VisaTypeCode }}</td>
                  <td>{{ $data->VisaTypeName }}</td>
                  <td>
                      <a href="/visa/detail/{{ $data->VisaTypeID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="/visa/edit/{{ $data->VisaTypeID }}" class="btn btn-sm btn-warning">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->VisaTypeID }}">Delete</a></button>
                  </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>

@foreach ($visa as $data)
        <div class="modal modal-danger fade" id="delete{{ $data->VisaTypeID }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->VisaTypeName }}</h4>
              </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this data ???</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/visa/delete/{{ $data->VisaTypeID }}" class="btn btn-outline">Yes</>
        </div>
      </div>
      {{-- /.modal-content --}}
    </div>
    {{-- /.modal-dialog --}}
  </div>
@endforeach

@endsection