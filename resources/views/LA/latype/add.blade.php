@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/latype" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data LA Type</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/latype/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
        <label class="form-label">LA Type Code</label>
        <input type="text" name="LaTypeCode" class="form-control" placeholder="LA Type Code" autofocus required>
      </div>
    
      <div class="form-group">
        <label class="form-label">LA Type Name</label>
        <input name="LaTypeName" class="form-control" placeholder="LA Type Name" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

