@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/visa" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Type Visa</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/visa/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
        <label class="form-label">Visa Type Code</label>
        <input type="text" name="VisaTypeCode" class="form-control" placeholder="Visa Type Code" autofocus required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Visa Type Name</label>
        <input name="VisaTypeName" class="form-control" placeholder="Visa Type Name" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

