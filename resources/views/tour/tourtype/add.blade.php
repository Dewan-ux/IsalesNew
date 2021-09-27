@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/tourtype" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Tour Type</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/tourtype/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
        <label class="form-label">Tour Type Code</label>
        <input type="text" name="TourTypeCode" class="form-control" placeholder="Tour Type Code" autofocus required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Tour Type Name</label>
        <input name="TourTypeName" class="form-control" placeholder="Tour Type Name" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

