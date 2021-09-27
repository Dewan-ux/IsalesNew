@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/typepayment" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Payment</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/typepayment/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
        <label class="form-label">Paymen Type Code</label>
        <input type="text" name="PaymentTypeCode" class="form-control" placeholder="Paymen Type Code" autofocus required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Paymen Type Name</label>
        <input name="PaymentTypeName" class="form-control" placeholder="Paymen Type Name" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

