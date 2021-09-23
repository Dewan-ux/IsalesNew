@extends('layout.app')
@section('title',' Transaction List')


@section('content')
<style>
.column {
  float: left;
  width: 100%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  size: 30px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<a href="" class="btn btn-primary btn-sm">Add Data</a> 
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Transaction List Data</h3>
            </div>
        <!-- /.box-header -->
            <div style="overflow-x:auto;">
			<div class="column">
              <table class="table table-striped table-hover">
                  
                <tr>
                  <th>Transaction ID</th>  
                  <th>Transaction Type</th>
                  <th>Customer Code</th>
				  <th>Package Code</th>
				  <th>Tour Type Code</th>
				  <th>Docs Attach</th>
				  <th>Payment Method Code</th>
				  <th>Bank Code</th>
				  <th>Return Account Number</th>
				  <th>Total Amount</th>
				  <th>Amount Paid</th>
				  <th>Paid Status</th>
				  <th>Remarks</th>
                  <th>Action</th>
                </tr>
                  
                
                
                  <?php $no=1; ?>
                    @foreach ($transaction as $data)
                      
                <tr> 
                  <td>{{ $no++ }}</td>  
                  <td>{{ $data->TransactionID}}</td>
                  <td>{{ $data->CustomerID}}</td>
				  <td>{{ $data->PackageID}}</td>
				  <td>{{ $data->TourTypeID}}</td>
				  <td>{{ $data->DocsAttach}}</td>
				  <td>{{ $data->PaymentMethodID}}</td>
				  <td>{{ $data->BankID}}</td>
				  <td>{{ $data->ReturnAccountNumber}}</td>
				  <td>{{ $data->TotalAmount}}</td>
				  <td>{{ $data->AmountPaid}}</td>
				  <td>{{ $data->PaidStatus}}</td>
				  <td>{{ $data->Remarks}}</td>
                  <td>
                      <a href="/flightclass/detail/{{ $data->TransactionID }}" class="btn btn-sm btn-success">Detail</a>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                    @endforeach
               
              </table>
			  </div>
			 
@endsection